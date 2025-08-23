#!/usr/bin/env python3
"""
CLI Scanner Module
==================
Handles CLI definition parsing and language handling for translation keys.
"""

import re
from pathlib import Path
from typing import Dict, List


class CLIScanner:
    """Scans CLI language definition files for translation keys."""

    def __init__(self):
        self.key_definitions: Dict[str, Dict] = {}
        self.language_keys: Dict[str, Dict[str, Dict]] = {}

    def scan_cli_definitions(self, lang_dir: str) -> None:
        """Scan CLI language definition files for translation keys."""
        lang_path = Path(lang_dir)
        if not lang_path.exists():
            return

        print(f"Scanning CLI language definitions in: {lang_dir}")

        # Scan CLI module files
        cli_dir = lang_path / 'cli'
        if cli_dir.exists():
            for sh_file in cli_dir.glob('*.sh'):
                self.parse_cli_module(sh_file, lang_dir)

        # Scan legacy files
        legacy_files = ['cli_lang', 'cli_lang_modular']
        for legacy_file in legacy_files:
            legacy_path = lang_path / legacy_file
            if legacy_path.exists():
                self.parse_legacy_file(legacy_path, lang_dir)

        print(f"Definition scan completed. Found {len(self.key_definitions)} unique keys.")

    def parse_cli_module(self, file_path: Path, lang_dir: str) -> None:
        """Parse a CLI module file for quickbox::lang:: function definitions."""
        module_name = file_path.stem
        print(f"Parsing CLI module: {module_name}")

        try:
            # Extract language code from lang_dir path
            lang_code = Path(lang_dir).name

            with open(file_path, 'r', encoding='utf-8') as f:
                for line_num, line in enumerate(f, 1):
                    line = line.strip()

                    # Skip comments and empty lines
                    if not line or line.startswith('#'):
                        continue

                    # Match quickbox::lang::*() { pattern
                    match = re.match(r'^\s*quickbox::lang::([a-zA-Z0-9_:]+)\s*\(\)\s*\{', line)
                    if match:
                        key = match.group(1)
                        safe_key = key.replace('::', '__')

                        # Store key per language
                        if lang_code not in self.language_keys:
                            self.language_keys[lang_code] = {}

                        self.language_keys[lang_code][safe_key] = {
                            'file': str(file_path),
                            'line': line_num,
                            'lang_dir': lang_dir,
                            'module': module_name,
                            'type': 'function',
                            'actual_key': key
                        }

                        # Also store in main key_definitions for backward compatibility
                        self.key_definitions[safe_key] = {
                            'file': str(file_path),
                            'line': line_num,
                            'lang_dir': lang_dir,
                            'module': module_name,
                            'type': 'function',
                            'actual_key': key
                        }
        except Exception as e:
            print(f"Error parsing {file_path}: {e}")

    def parse_legacy_file(self, file_path: Path, lang_dir: str) -> None:
        """Parse legacy language files for key-value pairs."""
        print(f"Parsing legacy file: {file_path}")

        try:
            # Extract language code from lang_dir path
            lang_code = Path(lang_dir).name

            with open(file_path, 'r', encoding='utf-8') as f:
                for line_num, line in enumerate(f, 1):
                    line = line.strip()

                    # Skip comments and empty lines
                    if not line or line.startswith('#'):
                        continue

                    # Skip lines with bash code
                    if any(char in line for char in ['"', '$', '`', '(', ')']):
                        continue

                    # Match KEY=value pattern
                    match = re.match(r'^\s*([A-Z][A-Z0-9_]*)\s*=', line)
                    if match:
                        key = match.group(1)

                        # Store key per language
                        if lang_code not in self.language_keys:
                            self.language_keys[lang_code] = {}

                        self.language_keys[lang_code][key] = {
                            'file': str(file_path),
                            'line': line_num,
                            'lang_dir': lang_dir,
                            'module': 'legacy',
                            'type': 'variable',
                            'actual_key': key
                        }

                        # Also store in main key_definitions for backward compatibility
                        self.key_definitions[key] = {
                            'file': str(file_path),
                            'line': line_num,
                            'lang_dir': lang_dir,
                            'module': 'legacy',
                            'type': 'variable',
                            'actual_key': key
                        }
        except Exception as e:
            print(f"Error parsing {file_path}: {e}")

    def get_language_keys(self) -> Dict[str, Dict[str, Dict]]:
        """Get the language keys dictionary."""
        return self.language_keys

    def get_key_definitions(self) -> Dict[str, Dict]:
        """Get the key definitions dictionary."""
        return self.key_definitions
