#!/usr/bin/env python3
"""
Function Remover Module
=======================
Handles function boundary detection and removal for unused translation functions.
"""

from pathlib import Path
from typing import Dict, List, Tuple


class FunctionRemover:
    """Removes unused translation functions from language files."""

    def __init__(self):
        self.removed_functions: List[Dict] = []

    def prepare_function_removals(self, language_keys: Dict[str, Dict[str, Dict]], usage_index: Dict[str, List]) -> None:
        """Prepare the list of functions to be removed."""
        print("Preparing function removal list...")

        # Remove ANY unused translation functions, regardless of namespace
        # If it's defined in a language file but not used anywhere in the source code, remove it

        for lang_code, lang_keys in language_keys.items():
            for safe_key, definition in lang_keys.items():
                # Only process unused functions
                if safe_key in usage_index:
                    continue

                # Only process function types (not variables)
                if definition['type'] != 'function':
                    continue

                # Identify function boundaries
                start_line, end_line = self._identify_function_boundaries(
                    definition['file'],
                    definition['actual_key'],
                    definition['line']
                )

                # Add to removal list
                self.removed_functions.append({
                    'function_name': definition['actual_key'],
                    'file_path': definition['file'],
                    'start_line': start_line,
                    'end_line': end_line,
                    'language': lang_code
                })

        print(f"Identified {len(self.removed_functions)} unused translation functions for removal.")

    def remove_unused_functions(self) -> None:
        """Remove unused translation functions from language files."""
        if not self.removed_functions:
            print("No unused functions to remove.")
            return

        print(f"Removing {len(self.removed_functions)} unused translation functions...")

        # Group removals by file for efficiency
        file_removals = {}
        for removal in self.removed_functions:
            file_path = removal['file_path']
            if file_path not in file_removals:
                file_removals[file_path] = []
            file_removals[file_path].append(removal)

        # Process each file
        for file_path, removals in file_removals.items():
            self._remove_functions_from_file(file_path, removals)

        print(f"Successfully removed {len(self.removed_functions)} unused functions.")

    def _identify_function_boundaries(self, file_path: str, function_name: str, start_line: int) -> Tuple[int, int]:
        """Identify the start and end lines of a function definition with PRECISE boundaries."""
        try:
            with open(file_path, 'r', encoding='utf-8') as f:
                lines = f.readlines()

            # Find the function start (should be the line we already know)
            if start_line < 1 or start_line > len(lines):
                return start_line, start_line

            start_idx = start_line - 1  # Convert to 0-based index

            # Look for the EXACT function pattern
            # Function should look like: quickbox::lang::function_name() {
            # or: quickbox::lang::function_name() \n {

            # Check if this line contains the function declaration
            current_line = lines[start_idx].strip()
            if not current_line.startswith('quickbox::lang::'):
                print(f"Warning: Line {start_line} doesn't contain function declaration: {current_line}")
                return start_line, start_line

            # Find the opening brace - could be on same line or next line
            opening_brace_line = start_idx

            # Check if opening brace is on the same line
            if '{' in lines[start_idx]:
                opening_brace_line = start_idx
            else:
                # Look for opening brace on next few lines (but be conservative)
                for i in range(start_idx + 1, min(start_idx + 5, len(lines))):
                    if '{' in lines[i]:
                        opening_brace_line = i
                        break

                # If we didn't find an opening brace within 5 lines, this isn't a valid function
                if opening_brace_line == start_idx:
                    print(f"Warning: No opening brace found for function {function_name} starting at line {start_line}")
                    return start_line, start_line

            # Find the closing brace with PRECISE counting
            # Only count braces that are part of THIS function, not nested functions
            brace_count = 0
            end_line = opening_brace_line

            # Start counting from the opening brace
            for i in range(opening_brace_line, len(lines)):
                line = lines[i]

                # Count opening braces
                brace_count += line.count('{')
                # Count closing braces
                brace_count -= line.count('}')

                # When we reach brace_count = 0, we've found the end of THIS function
                if brace_count == 0:
                    end_line = i
                    break

            # CRITICAL SAFETY CHECK: Make sure we didn't go too far
            # If we didn't find a closing brace, don't remove anything
            if brace_count != 0:
                print(f"Warning: Could not find complete function boundaries for {function_name} in {file_path}")
                return start_line, start_line

            # CRITICAL SAFETY CHECK: Make sure we're not removing too much
            # A function should not be more than 50 lines (safety threshold)
            function_length = end_line - opening_brace_line + 1
            if function_length > 50:
                print(f"Warning: Function {function_name} appears to be {function_length} lines long - skipping removal for safety")
                return start_line, start_line

            # Convert back to 1-based line numbers
            return opening_brace_line + 1, end_line + 1

        except Exception as e:
            print(f"Warning: Could not determine function boundaries for {function_name} in {file_path}: {e}")
            return start_line, start_line

    def _remove_functions_from_file(self, file_path: str, removals: List[Dict]) -> None:
        """Remove multiple functions from a single file."""
        try:
            file_path_obj = Path(file_path)
            if not file_path_obj.exists():
                print(f"Warning: File {file_path} no longer exists, skipping...")
                return

            # Read the file content
            with open(file_path_obj, 'r', encoding='utf-8') as f:
                lines = f.readlines()

            # Sort removals by line number (descending) to avoid line number shifts
            removals.sort(key=lambda x: x['start_line'], reverse=True)

            # Track lines to remove
            lines_to_remove = set()

            for removal in removals:
                start_line = removal['start_line'] - 1  # Convert to 0-based index
                end_line = removal['end_line'] - 1

                # Mark lines for removal
                for i in range(start_line, end_line + 1):
                    if 0 <= i < len(lines):
                        lines_to_remove.add(i)

            # Remove lines and add spacing
            new_lines = []
            i = 0
            while i < len(lines):
                if i in lines_to_remove:
                    # Skip this line
                    i += 1
                    continue

                # Check if we need to add spacing after a removal
                if i > 0 and (i-1) in lines_to_remove:
                    # Add a single empty line after removal
                    if new_lines and new_lines[-1].strip():  # Don't add if last line was already empty
                        new_lines.append('\n')

                new_lines.append(lines[i])
                i += 1

            # Write the content back
            with open(file_path_obj, 'w', encoding='utf-8') as f:
                f.writelines(new_lines)

            print(f"  Updated {file_path}: removed {len(removals)} functions")

        except Exception as e:
            print(f"Error processing {file_path}: {e}")

    def get_removed_functions(self) -> List[Dict]:
        """Get the list of removed functions."""
        return self.removed_functions

    def has_removed_functions(self) -> bool:
        """Check if there are removed functions."""
        return len(self.removed_functions) > 0
