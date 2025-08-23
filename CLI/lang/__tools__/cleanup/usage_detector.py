#!/usr/bin/env python3
"""
Usage Detector Module
=====================
Handles file scanning and usage pattern matching for translation keys.
"""

import os
import re
from pathlib import Path
from typing import Dict, List, Tuple


class UsageDetector:
    """Detects usage of translation keys across the codebase."""

    def __init__(self, scan_root: str, exclude_patterns: List[str] = None):
        self.scan_root = Path(scan_root)
        self.exclude_patterns = exclude_patterns or []
        self.usage_index: Dict[str, List[Tuple[str, int, str]]] = {}

    def should_exclude_path(self, path: Path) -> bool:
        """Check if a path should be excluded from scanning."""
        path_str = str(path)
        for pattern in self.exclude_patterns:
            if pattern in path_str:
                return True

        # Default exclusions
        default_excludes = ['.git', 'node_modules', 'vendor', 'dist', 'build',
                           'coverage', '__reports__']
        for exclude in default_excludes:
            if exclude in path_str:
                return True

        return False

    def scan_usage_globally(self) -> None:
        """Scan the codebase for usage of translation keys using Python's built-in file scanning."""
        print("Building global usage index using Python file scanning...")

        # Determine the correct search root
        if (self.scan_root / 'src').exists():
            search_root = self.scan_root / 'src'
        elif (self.scan_root / 'config').exists():
            search_root = self.scan_root
        else:
            print(f"Warning: Cannot determine src directory structure from {self.scan_root}")
            return

        search_root = search_root.resolve()
        print(f"Search root: {search_root}")

        if not search_root.exists():
            print(f"Warning: Search root not found at {search_root}")
            return

        # Use Python's built-in file scanning for maximum reliability
        self._scan_directory_recursively(search_root)

        print(f"Global usage scan completed. Found {len(self.usage_index)} unique keys in usage.")

        if len(self.usage_index) == 0:
            print("WARNING: No usage found! This suggests:")
            print("  1. The patterns in patterns.conf may not match actual usage")
            print("  2. The search directories may be incorrect")
            print("  3. The key extraction logic may be failing")
            print("  4. There may genuinely be no usage of these keys")

    def _scan_directory_recursively(self, directory: Path) -> None:
        """Recursively scan a directory for translation key usage using Python."""
        print(f"Scanning directory: {directory}")

        # Define file extensions to scan (including files without extensions)
        scan_extensions = {'.sh', '.bash', '.zsh', '.ksh', '.csh', '.fish', '.php', '.js', '.py', '.rb', '.pl', '.tcl', ''}

        # Define directories to exclude
        exclude_dirs = {'config/lang', 'dashboard', '__reports__', '__tools__', '.git', 'node_modules', 'vendor', 'dist', 'build', 'coverage'}

        scanned_files = 0
        found_keys = 0

        for root, dirs, files in os.walk(directory):
            # Filter out excluded directories
            dirs[:] = [d for d in dirs if d not in exclude_dirs and not any(exclude in str(Path(root) / d) for exclude in exclude_dirs)]

            for file in files:
                file_path = Path(root) / file

                # Only scan files with relevant extensions
                if file_path.suffix not in scan_extensions:
                    continue

                # Skip if this is a language definition file
                if 'config/lang' in str(file_path):
                    continue

                scanned_files += 1
                if scanned_files % 100 == 0:
                    print(f"  Scanned {scanned_files} files, found {found_keys} keys...")

                # Scan this file for translation key usage
                keys_found = self._scan_single_file(file_path)
                found_keys += keys_found

        print(f"Directory scan completed: {scanned_files} files scanned, {found_keys} translation keys found")

    def _scan_single_file(self, file_path: Path) -> int:
        """Scan a single file for translation key usage. Returns number of keys found."""
        try:
            if not file_path.exists() or not file_path.is_file():
                return 0

            # Read file content
            with open(file_path, 'r', encoding='utf-8', errors='ignore') as f:
                content = f.read()

            keys_found = 0

            # COMPREHENSIVE SCANNING: Look for ALL possible usage patterns

            # 1. Scan for quickbox::lang:: function calls (most common)
            matches = re.findall(r'quickbox::lang::([a-zA-Z0-9_:]+)', content)
            for match in matches:
                self._add_usage(match, str(file_path), 0, content)
                keys_found += 1

            # 2. Scan for function existence checks (declare -F)
            declare_matches = re.findall(r'declare\s+-F\s+quickbox::lang::([a-zA-Z0-9_:]+)', content)
            for match in declare_matches:
                self._add_usage(match, str(file_path), 0, content)
                keys_found += 1

            # 3. Scan for legacy function calls
            legacy_matches = re.findall(r'\b(mflang|get_lang|qb_lang|print_lang|qb::lang)\s*\(\s*["\']([A-Z0-9_:\-]+)["\']', content)
            for _, match in legacy_matches:
                self._add_usage(match, str(file_path), 0, content)
                keys_found += 1

            # 4. Scan for PHP direct lookups
            php_matches = re.findall(r'\$L\[["\']([A-Z0-9_:\-]+)["\']\]', content)
            for match in php_matches:
                self._add_usage(match, str(file_path), 0, content)
                keys_found += 1

            # 5. Look for namespace mismatches
            # Functions might be defined as software::wsdashboard::function but called as wsd::function
            # Extract the base function name and look for any usage
            for match in matches:
                if '::' in match:
                    # Extract the base function name (after the last ::)
                    base_name = match.split('::')[-1]
                    if base_name:
                        self._add_usage(base_name, str(file_path), 0, content)
                        keys_found += 1

            # 6. AGGRESSIVE SCANNING: Look for ANY string that could be a translation key
            # This catches usage patterns we might have missed
            all_strings = re.findall(r'["\']([^"\']+)["\']', content)
            for string in all_strings:
                # Look for strings that match translation key patterns
                if (re.match(r'^[A-Z][A-Z0-9_:\-]+$', string) and
                    ('::' in string or string.count('_') >= 2 or len(string) >= 5)):
                    self._add_usage(string, str(file_path), 0, content)
                    keys_found += 1

            # 7. AGGRESSIVE SCANNING: Look for any line containing potential translation keys
            lines = content.split('\n')
            for line in lines:
                # Look for any line that might reference a translation function
                if 'quickbox::lang::' in line or 'mflang' in line or 'get_lang' in line:
                    # Extract any potential keys from this line
                    potential_keys = re.findall(r'[A-Z][A-Z0-9_:\-]+', line)
                    for key in potential_keys:
                        if '::' in key or key.count('_') >= 2:
                            self._add_usage(key, str(file_path), 0, content)
                            keys_found += 1

            # 8. CRITICAL ADDITION: Look for any reference to translation functions in comments or strings
            # This catches cases where functions are documented or referenced
            comment_matches = re.findall(r'#.*?quickbox::lang::([a-zA-Z0-9_:]+)', content)
            for match in comment_matches:
                self._add_usage(match, str(file_path), 0, content)
                keys_found += 1

            # 9. CRITICAL ADDITION: Look for any variable assignments that might reference translation keys
            var_matches = re.findall(r'(\w+)\s*=\s*["\']([A-Z][A-Z0-9_:\-]+)["\']', content)
            for var_name, value in var_matches:
                if '::' in value or value.count('_') >= 2:
                    self._add_usage(value, str(file_path), 0, content)
                    keys_found += 1

            return keys_found

        except Exception as e:
            print(f"Warning: Error scanning {file_path}: {e}")
            return 0

    def _add_usage(self, key: str, file_path: str, line_num: int, content: str) -> None:
        """Add a usage entry to the usage index."""
        # Handle both the full key and the base key for proper matching

        # Store the original key
        safe_key = key.replace('::', '__')

        if safe_key not in self.usage_index:
            self.usage_index[safe_key] = []

        # Find the actual line number for better reporting
        try:
            lines = content.split('\n')
            for i, line in enumerate(lines, 1):
                if key in line:
                    line_num = i
                    break
        except:
            line_num = 0

        self.usage_index[safe_key].append((file_path, line_num, content[:200] + "..." if len(content) > 200 else content))

        # CRITICAL ADDITION: Also store the base key (after last ::) for partial matching
        if '::' in key:
            base_key = key.split('::')[-1]
            base_safe_key = base_key.replace('::', '__')

            if base_safe_key not in self.usage_index:
                self.usage_index[base_safe_key] = []

            self.usage_index[base_safe_key].append((file_path, line_num, content[:200] + "..." if len(content) > 200 else content))

        if len(self.usage_index[safe_key]) <= 3:  # Only show first few matches to avoid spam
            print(f"  Found usage: {key} in {file_path}:{line_num}")

        if len(self.usage_index[safe_key]) == 3:
            print(f"  ... and {len(self.usage_index[safe_key]) - 3} more usages of {key}")

    def get_usage_index(self) -> Dict[str, List[Tuple[str, int, str]]]:
        """Get the usage index dictionary."""
        return self.usage_index
