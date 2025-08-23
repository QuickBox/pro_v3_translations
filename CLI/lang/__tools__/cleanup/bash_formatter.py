#!/usr/bin/env python3
"""
Bash Formatter Module
=====================
Handles bash file formatting (shfmt + custom formatter).
"""

import os
import subprocess
import tempfile
import shutil
import difflib
from pathlib import Path
from typing import List, Dict


class BashFormatter:
    """Formats bash files using shfmt or custom formatter."""

    def __init__(self):
        pass

    def format_bash_files(self, language_keys: Dict[str, Dict[str, Dict]], lang_codes: List[str] = None, use_shfmt: bool = True) -> None:
        """
        Format bash files in specified languages or all languages.

        Args:
            language_keys: Dictionary of language keys
            lang_codes: List of language codes to format, or None for all
            use_shfmt: Whether to try shfmt first (default: True)
        """
        if lang_codes is None:
            # Format all languages
            lang_codes = list(language_keys.keys())

        print(f"Formatting bash files in languages: {', '.join(lang_codes)}")
        if use_shfmt:
            print("Will attempt to use shfmt for formatting (with fallback to custom formatter)")
        else:
            print("Using custom formatter only")

        total_files = 0
        shfmt_files = 0
        fallback_files = 0

        for lang_code in lang_codes:
            if lang_code not in language_keys:
                print(f"Warning: Language {lang_code} not found, skipping...")
                continue

            # Get all bash files for this language
            lang_files = set()
            for key_info in language_keys[lang_code].values():
                if key_info['file'].endswith('.sh'):
                    lang_files.add(key_info['file'])

            if not lang_files:
                print(f"No bash files found for language {lang_code}")
                continue

            print(f"Formatting {len(lang_files)} bash files for {lang_code}...")

            for file_path in lang_files:
                total_files += 1

                if use_shfmt:
                    # Try shfmt first
                    if self._format_with_shfmt(file_path):
                        shfmt_files += 1
                        continue

                # Fallback to custom formatter
                self._format_single_bash_file(file_path)
                fallback_files += 1

        print(f"\nFormatting summary:")
        print(f"  Total files processed: {total_files}")
        if use_shfmt:
            print(f"  Files formatted with shfmt: {shfmt_files}")
            print(f"  Files formatted with fallback: {fallback_files}")
        else:
            print(f"  Files formatted with custom formatter: {total_files}")

    def show_formatting_diff(self, file_path: str, use_shfmt: bool = True) -> None:
        """
        Show what formatting changes would be made to a file without applying them.

        Args:
            file_path: Path to the file to check
            use_shfmt: Whether to show shfmt diff if available (default: True)
        """
        try:
            file_path_obj = Path(file_path)
            if not file_path_obj.exists():
                print(f"Warning: File {file_path} does not exist")
                return

            if use_shfmt:
                # Try to show shfmt diff first
                if self._show_shfmt_diff(file_path):
                    return

            # Fallback to custom formatter diff
            self._show_custom_formatter_diff(file_path)

        except Exception as e:
            print(f"Error showing formatting diff for {file_path}: {e}")

    def _format_with_shfmt(self, file_path: str) -> bool:
        """
        Format a bash file using shfmt (preferred method).

        Returns True if shfmt was used successfully, False otherwise.
        """
        try:
            # Check if shfmt is available
            result = subprocess.run(['which', 'shfmt'], capture_output=True, text=True)
            if result.returncode != 0:
                print(f"  {file_path}: shfmt not available, using fallback formatter")
                return False

            shfmt_path = result.stdout.strip()
            print(f"  {file_path}: using shfmt for formatting")

            # Run shfmt on the file
            result = subprocess.run([
                shfmt_path, '-w', file_path
            ], capture_output=True, text=True, timeout=30)

            if result.returncode == 0:
                print(f"  {file_path}: formatted successfully with shfmt")
                return True
            else:
                print(f"  {file_path}: shfmt failed: {result.stderr}")
                return False

        except subprocess.TimeoutExpired:
            print(f"  {file_path}: shfmt timed out, using fallback formatter")
            return False
        except Exception as e:
            print(f"  {file_path}: shfmt error: {e}, using fallback formatter")
            return False

    def _format_single_bash_file(self, file_path: str) -> None:
        """Format a single bash file using the custom formatter."""
        try:
            file_path_obj = Path(file_path)
            if not file_path_obj.exists():
                print(f"Warning: File {file_path} no longer exists, skipping...")
                return

            # Read the file content
            with open(file_path_obj, 'r', encoding='utf-8') as f:
                lines = f.readlines()

            # Apply formatting
            formatted_lines = self._format_bash_file(lines)

            # Check if formatting actually changed anything
            if formatted_lines == lines:
                print(f"  {file_path}: no formatting changes needed")
                return

            # Write the formatted content back
            with open(file_path_obj, 'w', encoding='utf-8') as f:
                f.writelines(formatted_lines)

            print(f"  {file_path}: reformatted successfully with custom formatter")

        except Exception as e:
            print(f"Error formatting {file_path}: {e}")

    def _format_bash_file(self, lines: List[str]) -> List[str]:
        """
        Apply extremely conservative bash formatting.

        This method ONLY:
        1. Removes trailing whitespace from lines (but keeps newlines)
        2. Ensures file ends with exactly one newline
        3. Removes excessive empty lines (max 1 consecutive empty line)
        4. Does NOT touch any other formatting, content, or structure

        This is designed to be completely safe and non-destructive.
        """
        if not lines:
            return ['\n']

        # Step 1: Remove trailing whitespace from each line (but keep newlines)
        # This is the ONLY change we make to line content
        formatted_lines = []

        for line in lines:
            # Remove trailing whitespace but preserve the newline character
            if line.endswith('\n'):
                # Keep the newline, just remove trailing spaces/tabs
                formatted_lines.append(line.rstrip() + '\n')
            else:
                # No newline, just remove trailing whitespace
                formatted_lines.append(line.rstrip())

        # Step 2: Remove excessive empty lines (max 1 consecutive empty line)
        # This fixes the multiple empty lines left by function removal
        clean_lines = []
        consecutive_empty = 0

        for line in formatted_lines:
            is_empty = not line.strip()

            if is_empty:
                consecutive_empty += 1
                # Only keep the first empty line, skip additional ones
                if consecutive_empty <= 1:
                    clean_lines.append(line)
            else:
                consecutive_empty = 0
                clean_lines.append(line)

        # Step 3: Ensure file ends with exactly one newline
        # Remove any trailing empty lines
        while clean_lines and not clean_lines[-1].strip():
            clean_lines.pop()

        # Add exactly one newline at the end
        if clean_lines:
            clean_lines.append('')

        return clean_lines

    def _show_shfmt_diff(self, file_path: str) -> bool:
        """Show shfmt formatting differences without applying them."""
        try:
            # Check if shfmt is available
            result = subprocess.run(['which', 'shfmt'], capture_output=True, text=True)
            if result.returncode != 0:
                return False

            shfmt_path = result.stdout.strip()

            # Create a temporary copy for formatting
            with tempfile.NamedTemporaryFile(mode='w', suffix='.sh', delete=False) as temp_file:
                temp_path = temp_file.name
                # Copy original content
                shutil.copy2(file_path, temp_path)

            try:
                # Format the temp file with shfmt
                result = subprocess.run([
                    shfmt_path, '-w', temp_path
                ], capture_output=True, text=True, timeout=30)

                if result.returncode != 0:
                    return False

                # Read both files and show diff
                with open(file_path, 'r', encoding='utf-8') as f:
                    original_content = f.read()

                with open(temp_path, 'r', encoding='utf-8') as f:
                    formatted_content = f.read()

                if original_content == formatted_content:
                    print(f"  {file_path}: no shfmt formatting changes needed")
                else:
                    print(f"\nshfmt formatting changes for {file_path}:")
                    print("=" * 50)

                    # Show the differences
                    diff = difflib.unified_diff(
                        original_content.splitlines(keepends=True),
                        formatted_content.splitlines(keepends=True),
                        fromfile=f"{file_path} (original)",
                        tofile=f"{file_path} (shfmt formatted)",
                        lineterm=''
                    )

                    for line in diff:
                        if line.startswith('+') and not line.startswith('+++'):
                            print(f"  + {line[1:].rstrip()}")
                        elif line.startswith('-') and not line.startswith('---'):
                            print(f"  - {line[1:].rstrip()}")
                        elif line.startswith('@'):
                            print(f"  {line}")

                    print("=" * 50)

                return True

            finally:
                # Clean up temp file
                try:
                    os.unlink(temp_path)
                except:
                    pass

        except Exception as e:
            print(f"Warning: Error showing shfmt diff for {file_path}: {e}")
            return False

    def _show_custom_formatter_diff(self, file_path: str) -> None:
        """Show custom formatter differences without applying them."""
        try:
            # Read the file content
            with open(file_path, 'r', encoding='utf-8') as f:
                original_lines = f.readlines()

            # Apply formatting
            formatted_lines = self._format_bash_file(original_lines)

            # Check if formatting actually changed anything
            if formatted_lines == original_lines:
                print(f"  {file_path}: no custom formatting changes needed")
                return

            print(f"\nCustom formatting changes for {file_path}:")
            print("=" * 50)

            # Show the differences
            diff = difflib.unified_diff(
                original_lines,
                formatted_lines,
                fromfile=f"{file_path} (original)",
                tofile=f"{file_path} (custom formatted)",
                lineterm=''
            )

            for line in diff:
                if line.startswith('+') and not line.startswith('+++'):
                    print(f"  + {line[1:].rstrip()}")
                elif line.startswith('-') and not line.startswith('---'):
                    print(f"  - {line[1:].rstrip()}")
                elif line.startswith('@'):
                    print(f"  {line}")

            print("=" * 50)

        except Exception as e:
            print(f"Error showing custom formatting diff for {file_path}: {e}")
