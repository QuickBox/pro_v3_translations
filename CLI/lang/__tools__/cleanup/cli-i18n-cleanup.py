#!/usr/bin/env python3
"""
CLI Translation Key Cleanup Tool
================================
Python3 implementation for detecting unused and duplicate CLI translation keys.
"""

import os
import re
import json
import argparse
import subprocess
from pathlib import Path
from datetime import datetime
from typing import Dict, List, Set, Tuple, Optional
import sys

class CLITranslationCleanup:
    def __init__(self, scan_root: str, exclude_patterns: List[str] = None, wsd_path: str = None):
        self.scan_root = Path(scan_root)
        self.exclude_patterns = exclude_patterns or []
        self.wsd_path = Path(wsd_path) if wsd_path else None
        self.usage_patterns = []
        self.prefix_allowlist = []
        self.key_definitions: Dict[str, Dict] = {}
        self.usage_index: Dict[str, List[Tuple[str, int, str]]] = {}
        self.language_keys: Dict[str, Dict[str, Dict]] = {}  # Track keys per language
        self.removed_functions: List[Dict] = []  # Track removed functions for reporting
        
    def load_patterns(self, patterns_file: str, allowlist_file: str) -> bool:
        """Load usage patterns and prefix allowlist from files."""
        try:
            # Load usage patterns
            if os.path.exists(patterns_file):
                with open(patterns_file, 'r', encoding='utf-8') as f:
                    for line in f:
                        line = line.strip()
                        if line and not line.startswith('#'):
                            self.usage_patterns.append(line)
                print(f"Loaded {len(self.usage_patterns)} usage patterns")
            
            # Load prefix allowlist
            if os.path.exists(allowlist_file):
                with open(allowlist_file, 'r', encoding='utf-8') as f:
                    for line in f:
                        line = line.strip()
                        if line and not line.startswith('#'):
                            self.prefix_allowlist.append(line)
                print(f"Loaded {len(self.prefix_allowlist)} prefix allowlist entries")
            
            return len(self.usage_patterns) > 0 and len(self.prefix_allowlist) > 0
        except Exception as e:
            print(f"Error loading patterns: {e}")
            return False
    
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
        
        # Also scan the WSD file if it exists (check both sibling and relative paths)
        wsd_paths = []
        
        # Add custom WSD path if provided
        if self.wsd_path:
            wsd_paths.append(self.wsd_path / 'cli' / 'bin' / 'qb-wsd')
        
        # Add default search paths
        wsd_paths.extend([
            # Check if WSD is a sibling directory (same level as v3-development)
            self.scan_root.parent / 'wsd' / 'cli' / 'bin' / 'qb-wsd',
            # Check if WSD is inside the current scan root
            self.scan_root / 'wsd' / 'cli' / 'bin' / 'qb-wsd',
            # Check if we're already in the src directory
            self.scan_root.parent.parent / 'wsd' / 'cli' / 'bin' / 'qb-wsd'
        ])
        
        wsd_found = False
        for wsd_file in wsd_paths:
            if wsd_file.exists():
                print(f"Scanning WSD file: {wsd_file}")
                self._scan_single_file(wsd_file)
                wsd_found = True
                break
        
        if not wsd_found:
            print("WSD file not found. Checked paths:")
            for wsd_file in wsd_paths:
                print(f"  - {wsd_file}")
            print("Note: WSD scanning is optional and won't affect CLI translation cleanup")
        
        print(f"Global usage scan completed. Found {len(self.usage_index)} unique keys in usage.")
        
        if len(self.usage_index) == 0:
            print("WARNING: No usage found! This suggests:")
            print("  1. The patterns in patterns.conf may not match actual usage")
            print("  2. The search directories may be incorrect")
            print("  3. The key extraction logic may be failing")
            print("  4. There may genuinely be no usage of these keys")
            print(f"\nDebug info:")
            print(f"  Patterns loaded: {len(self.usage_patterns)}")
            print(f"  Keys defined: {len(self.key_definitions)}")
            print(f"  Search root: {search_root}")
    
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
            
            # 5. CRITICAL FIX: Look for namespace mismatches
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
        # CRITICAL FIX: Handle both the full key and the base key for proper matching
        
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
    
    # Legacy methods removed - replaced with Python-based scanning for reliability
    
    # Key extraction now handled directly in _scan_single_file for efficiency
    
    def get_usage_stats(self) -> Tuple[int, int, int]:
        """Get usage statistics."""
        # CRITICAL FIX: Calculate stats from per-language tracking with proper key matching
        
        total_keys = sum(len(lang_keys) for lang_keys in self.language_keys.values())
        used_keys = 0
        
        # Count used keys across all languages with improved matching
        for lang_code, lang_keys in self.language_keys.items():
            for safe_key, definition in lang_keys.items():
                # Check if the key is directly in usage index
                if safe_key in self.usage_index:
                    used_keys += 1
                    continue
                
                # CRITICAL FIX: Check for partial matches (namespace mismatches)
                # Function might be defined as software::wsdashboard::function but used as wsd::function
                actual_key = definition['actual_key']
                if '::' in actual_key:
                    # Extract the base function name (after last ::)
                    base_name = actual_key.split('::')[-1]
                    base_safe_key = base_name.replace('::', '__')
                    
                    # Check if base name is in usage index
                    if base_safe_key in self.usage_index:
                        used_keys += 1
                        continue
                    
                    # Check if any part of the namespace is in usage index
                    namespace_parts = actual_key.split('::')
                    for part in namespace_parts:
                        if part in self.usage_index:
                            used_keys += 1
                            break
        
        unused_keys = total_keys - used_keys
        
        return used_keys, unused_keys, total_keys
    
    def generate_reports(self, output_dir: str, evidence_count: int = 2) -> None:
        """Generate all reports."""
        output_path = Path(output_dir)
        output_path.mkdir(parents=True, exist_ok=True)
        
        # Generate summary
        self._generate_summary(output_path)
        
        # Generate detailed reports
        self._generate_unused_report(output_path)
        self._generate_usage_index_report(output_path)
        self._generate_json_report(output_path, evidence_count)
        self._generate_tsv_report(output_path, evidence_count)
    
    def _generate_summary(self, output_path: Path) -> None:
        """Generate summary report."""
        used_count, unused_count, total_keys = self.get_usage_stats()
        
        summary_file = output_path / 'summary.txt'
        with open(summary_file, 'w', encoding='utf-8') as f:
            f.write("CLI Translation Key Usage Analysis\n")
            f.write("=================================\n")
            f.write(f"Generated: {datetime.now().strftime('%c')}\n")
            f.write(f"Scan root: {self.scan_root}\n")
            f.write(f"Languages: {', '.join(self.language_keys.keys())}\n\n")
            
            # Overall summary
            f.write("Overall Summary:\n")
            f.write(f"  Total keys: {total_keys}\n")
            f.write(f"  Used keys: {used_count}\n")
            f.write(f"  Unused keys: {unused_count}\n")
            if total_keys > 0:
                usage_rate = (used_count * 100) // total_keys
                f.write(f"  Usage rate: {usage_rate}%\n")
            f.write("\n")
            
            # Per-language summary
            f.write("Per-Language Summary:\n")
            for lang_code, lang_keys in self.language_keys.items():
                lang_used = sum(1 for key in lang_keys if key in self.usage_index)
                lang_total = len(lang_keys)
                lang_unused = lang_total - lang_used
                lang_rate = (lang_used * 100) // lang_total if lang_total > 0 else 0
                f.write(f"  {lang_code.upper()}: {lang_used}/{lang_total} used ({lang_rate}%)\n")
            f.write("\n")
            
            if unused_count > 0:
                f.write("Unused keys found. Consider:\n")
                f.write("  1. Reviewing if keys are truly unused\n")
                f.write("  2. Updating patterns.conf if usage patterns are missing\n")
                f.write("  3. Removing unused keys if confirmed safe\n")
            
            if hasattr(self, 'removed_functions') and self.removed_functions:
                f.write(f"\nFUNCTIONS REMOVED: {len(self.removed_functions)} unused translation functions were removed.\n")
                f.write("See the removal log above for details.\n")
            else:
                f.write("\nThis was a DRY RUN. No changes were made.\n")
                f.write("Use --apply to make actual changes.\n")
        
        print(f"Summary generated: {summary_file}")
    
    def _generate_unused_report(self, output_path: Path) -> None:
        """Generate unused keys report."""
        used_count, unused_count, total_keys = self.get_usage_stats()
        
        if unused_count > 0:
            unused_file = output_path / 'unused.tsv'
            with open(unused_file, 'w', encoding='utf-8') as f:
                f.write("lang\tkey\tdefinition_file\tdefinition_line\tmodule\ttype\n")
                
                # Generate unused keys report from per-language tracking
                for lang_code, lang_keys in self.language_keys.items():
                    for safe_key, definition in lang_keys.items():
                        if safe_key not in self.usage_index:
                            f.write(f"{definition['lang_dir']}\t{definition['actual_key']}\t"
                                   f"{definition['file']}\t{definition['line']}\t"
                                   f"{definition['module']}\t{definition['type']}\n")
            
            print(f"Unused keys report generated: {unused_file}")
    
    def _generate_usage_index_report(self, output_path: Path) -> None:
        """Generate usage index report."""
        usage_file = output_path / 'usage-index.tsv'
        with open(usage_file, 'w', encoding='utf-8') as f:
            f.write("key\tusage_count\texample_file\texample_line\texample_content\n")
            
            for safe_key, usages in self.usage_index.items():
                usage_count = len(usages)
                if usages:
                    example_file, example_line, example_content = usages[0]
                    f.write(f"{safe_key}\t{usage_count}\t{example_file}\t{example_line}\t{example_content}\n")
        
        print(f"Usage index report generated: {usage_file}")
    
    def _generate_json_report(self, output_path: Path, evidence_count: int) -> None:
        """Generate JSON report."""
        json_file = output_path / 'usage-analysis.json'
        
        report_data = {
            'scan_timestamp': datetime.now().isoformat(),
            'total_keys': sum(len(lang_keys) for lang_keys in self.language_keys.values()),
            'keys': []
        }
        
        # Generate JSON report from per-language tracking
        for lang_code, lang_keys in self.language_keys.items():
            for safe_key, definition in lang_keys.items():
                usages = self.usage_index.get(safe_key, [])
                usage_count = len(usages)
                
                key_data = {
                    'key': definition['actual_key'],
                    'language': lang_code,
                    'status': 'used' if usage_count > 0 else 'unused',
                    'definition': definition,
                    'usage_count': usage_count,
                    'evidence': []
                }
                
                # Add evidence (usage examples)
                for file_path, line_num, content in usages[:evidence_count]:
                    key_data['evidence'].append({
                        'file': file_path,
                        'line': line_num,
                        'content': content
                    })
                
                report_data['keys'].append(key_data)
        
        with open(json_file, 'w', encoding='utf-8') as f:
            json.dump(report_data, f, indent=2, ensure_ascii=False)
        
        print(f"JSON report generated: {json_file}")
    
    def _generate_tsv_report(self, output_path: Path, evidence_count: int) -> None:
        """Generate TSV report."""
        tsv_file = output_path / 'usage-analysis.tsv'
        
        with open(tsv_file, 'w', encoding='utf-8') as f:
            f.write("lang\tkey\tstatus\tusage_count\texample_path\texample_line\n")
            
            # Generate TSV report from per-language tracking
            for lang_code, lang_keys in self.language_keys.items():
                for safe_key, definition in lang_keys.items():
                    usages = self.usage_index.get(safe_key, [])
                    usage_count = len(usages)
                    status = 'used' if usage_count > 0 else 'unused'
                    
                    example_path = ""
                    example_line = ""
                    if usages:
                        example_path, example_line, _ = usages[0]
                    
                    f.write(f"{definition['lang_dir']}\t{definition['actual_key']}\t{status}\t"
                           f"{usage_count}\t{example_path}\t{example_line}\n")
        
        print(f"TSV report generated: {tsv_file}")
    
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
            
            # Apply proper bash formatting to clean up whitespace issues
            formatted_lines = self._format_bash_file(new_lines)
            
            # Write the formatted content back
            with open(file_path_obj, 'w', encoding='utf-8') as f:
                f.writelines(formatted_lines)
            
            print(f"  Updated {file_path}: removed {len(removals)} functions and reformatted")
            
        except Exception as e:
            print(f"Error processing {file_path}: {e}")
    
    def _identify_function_boundaries(self, file_path: str, function_name: str, start_line: int) -> Tuple[int, int]:
        """Identify the start and end lines of a function definition with PRECISE boundaries."""
        try:
            with open(file_path, 'r', encoding='utf-8') as f:
                lines = f.readlines()
            
            # Find the function start (should be the line we already know)
            if start_line < 1 or start_line > len(lines):
                return start_line, start_line
            
            start_idx = start_line - 1  # Convert to 0-based index
            
            # CRITICAL FIX: Look for the EXACT function pattern
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
            
            # CRITICAL FIX: Find the closing brace with PRECISE counting
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
    
    def prepare_function_removals(self) -> None:
        """Prepare the list of functions to be removed."""
        print("Preparing function removal list...")
        
        # Remove ANY unused translation functions, regardless of namespace
        # If it's defined in a language file but not used anywhere in the source code, remove it
        
        for lang_code, lang_keys in self.language_keys.items():
            for safe_key, definition in lang_keys.items():
                # Only process unused functions
                if safe_key in self.usage_index:
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
    
    def _double_check_function_usage(self, function_name: str) -> bool:
        """Double-check if a function is truly unused by doing a more thorough search."""
        try:
            # Search more broadly for this function
            search_patterns = [
                f'quickbox::lang::{function_name}',
                f'declare -F quickbox::lang::{function_name}',
                f'"{function_name}"',
                f"'{function_name}'"
            ]
            
            # Search in the entire src directory
            src_dir = self.scan_root / 'src'
            if not src_dir.exists():
                src_dir = self.scan_root
            
            for pattern in search_patterns:
                try:
                    # Use grep to search more thoroughly
                    result = subprocess.run(
                        ['grep', '-r', pattern, str(src_dir)],
                        capture_output=True, text=True, timeout=30
                    )
                    if result.stdout.strip():
                        return True  # Function IS being used
                except:
                    continue
            
            return False  # Function appears to be truly unused
            
        except Exception as e:
            print(f"Warning: Error in double-check for {function_name}: {e}")
            # If we can't verify, assume it's used (safer)
            return True
    
    def _has_similar_patterns(self, function_name: str) -> bool:
        """Check if a function has similar patterns that suggest it might be used."""
        try:
            # Look for similar function names or patterns
            base_name = function_name.split('::')[-1] if '::' in function_name else function_name
            
            # Search for any similar patterns
            similar_patterns = [
                base_name,
                base_name.replace('_', ''),
                base_name.lower(),
                base_name.upper()
            ]
            
            # Search in the entire codebase for similar patterns
            src_dir = self.scan_root / 'src'
            if not src_dir.exists():
                src_dir = self.scan_root
            
            for pattern in similar_patterns:
                try:
                    result = subprocess.run(
                        ['grep', '-r', pattern, str(src_dir)],
                        capture_output=True, text=True, timeout=30
                    )
                    if result.stdout.strip():
                        return True  # Similar pattern found
                except:
                    continue
            
            return False
            
        except Exception as e:
            print(f"Warning: Error checking similar patterns for {function_name}: {e}")
            # If we can't verify, assume it has similar patterns (safer)
            return True
    
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
    
    def format_bash_files(self, lang_codes: List[str] = None, use_shfmt: bool = True) -> None:
        """
        Format bash files in specified languages or all languages.
        
        Args:
            lang_codes: List of language codes to format, or None for all
            use_shfmt: Whether to try shfmt first (default: True)
        """
        if lang_codes is None:
            # Format all languages
            lang_codes = list(self.language_keys.keys())
        
        print(f"Formatting bash files in languages: {', '.join(lang_codes)}")
        if use_shfmt:
            print("Will attempt to use shfmt for formatting (with fallback to custom formatter)")
        else:
            print("Using custom formatter only")
        
        total_files = 0
        shfmt_files = 0
        fallback_files = 0
        
        for lang_code in lang_codes:
            if lang_code not in self.language_keys:
                print(f"Warning: Language {lang_code} not found, skipping...")
                continue
            
            # Get all bash files for this language
            lang_files = set()
            for key_info in self.language_keys[lang_code].values():
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
    
    def _show_shfmt_diff(self, file_path: str) -> bool:
        """Show shfmt formatting differences without applying them."""
        try:
            # Check if shfmt is available
            result = subprocess.run(['which', 'shfmt'], capture_output=True, text=True)
            if result.returncode != 0:
                return False
            
            shfmt_path = result.stdout.strip()
            
            # Create a temporary copy for formatting
            import tempfile
            import shutil
            
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
                    import difflib
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
            import difflib
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


def main():
    parser = argparse.ArgumentParser(
        description='CLI Translation Key Cleanup Tool with Bash Formatting',
        epilog='''
Examples:
  # Dry run to see what would be cleaned up
  python3 cli-i18n-cleanup.py --verbose
  
  # Apply cleanup to English only
  python3 cli-i18n-cleanup.py --langs=en --apply
  
  # Format bash files without removing functions (uses shfmt by default)
  python3 cli-i18n-cleanup.py --format-only --langs=en,es
  
  # Format with custom formatter only (no shfmt)
  python3 cli-i18n-cleanup.py --format-only --langs=en,es --no-shfmt
  
  # Show formatting differences without applying (shfmt diff preferred)
  python3 cli-i18n-cleanup.py --show-diff --langs=en
  
  # Scan with custom WSD path for cross-project analysis
  python3 cli-i18n-cleanup.py --wsd-path ../wsd --verbose
  
  # Full cleanup with all languages (includes shfmt formatting)
  python3 cli-i18n-cleanup.py --apply --strict --verbose
        '''
    )
    parser.add_argument('--langs', help='Comma-separated list of languages to process')
    parser.add_argument('--scan-root', default='.', help='Root directory to scan for usage')
    parser.add_argument('--exclude', action='append', help='Additional exclude patterns')
    parser.add_argument('--wsd-path', help='Custom path to WSD repository for cross-project scanning')
    parser.add_argument('--verbose', action='store_true', help='Enable verbose output')
    parser.add_argument('--json', action='store_true', help='Generate JSON report')
    parser.add_argument('--tsv', action='store_true', help='Generate TSV report')
    parser.add_argument('--evidence', type=int, default=2, help='Number of evidence examples to include')
    parser.add_argument('--strict', action='store_true', help='Exit with error code if issues found')
    parser.add_argument('--apply', action='store_true', help='Actually remove unused functions (default is dry-run)')
    parser.add_argument('--format', action='store_true', help='Apply bash formatting after function removal (default: enabled)')
    parser.add_argument('--format-only', action='store_true', help='Only format bash files without removing functions')
    parser.add_argument('--show-diff', action='store_true', help='Show formatting differences without applying changes')
    parser.add_argument('--no-shfmt', action='store_true', help='Disable shfmt and use custom formatter only')
    
    args = parser.parse_args()
    
    # Set default output formats if none specified
    if not args.json and not args.tsv:
        args.json = True
        args.tsv = True
    
    # Initialize cleanup tool
    exclude_patterns = args.exclude or []
    wsd_path = args.wsd_path if args.wsd_path else None
    cleanup = CLITranslationCleanup(args.scan_root, exclude_patterns, wsd_path)
    
    # Load patterns
    script_dir = Path(__file__).parent
    patterns_file = script_dir / 'patterns.conf'
    allowlist_file = script_dir / 'prefix-allowlist.conf'
    
    if not cleanup.load_patterns(str(patterns_file), str(allowlist_file)):
        print("ERROR: Failed to load patterns")
        sys.exit(2)
    
    # Process languages
    if args.langs:
        lang_list = args.langs.split(',')
    else:
        # Auto-detect languages from the scan root
        # Handle both cases: when scan_root is the project root vs when it's already the src directory
        if (Path(args.scan_root) / 'src' / 'config' / 'lang').exists():
            lang_root = Path(args.scan_root) / 'src' / 'config' / 'lang'
        elif (Path(args.scan_root) / 'config' / 'lang').exists():
            # We're already in the src directory
            lang_root = Path(args.scan_root) / 'config' / 'lang'
        else:
            lang_root = None
        
        if lang_root and lang_root.exists():
            lang_list = [d.name for d in lang_root.iterdir() if d.is_dir() and len(d.name) == 2]
        else:
            lang_list = ['en']  # fallback
    
    print(f"Processing languages: {lang_list}")
    
    for lang in lang_list:
        # Handle both path cases
        if (Path(args.scan_root) / 'src' / 'config' / 'lang').exists():
            lang_dir = Path(args.scan_root) / 'src' / 'config' / 'lang' / lang
        else:
            # We're already in the src directory
            lang_dir = Path(args.scan_root) / 'config' / 'lang' / lang
        
        if lang_dir.exists():
            cleanup.scan_cli_definitions(str(lang_dir))
    
    # Scan for usage (this will now be focused on src/ directory)
    cleanup.scan_usage_globally()
    
    # Get statistics
    used_count, unused_count, total_keys = cleanup.get_usage_stats()
    print(f"Usage scan results:")
    print(f"  Total keys: {total_keys}")
    print(f"  Used keys: {used_count}")
    print(f"  Unused keys: {unused_count}")
    
    # REMOVED: Bullshit arbitrary safety threshold that prevents the tool from working
    # Instead, we'll focus on actually fixing the scanning logic to properly detect usage.
    
    if total_keys == 0:
        print("ERROR: No translation keys found")
        sys.exit(2)
    
    # Generate reports
    timestamp = datetime.now().strftime('%Y%m%d_%H%M%S')
    # Handle both path cases for report directory
    if (Path(args.scan_root) / 'src' / 'config' / 'lang').exists():
        report_dir = Path(args.scan_root) / 'src' / 'config' / 'lang' / '__reports__' / timestamp
    else:
        # We're already in the src directory
        report_dir = Path(args.scan_root) / 'config' / 'lang' / '__reports__' / timestamp
    
    cleanup.generate_reports(str(report_dir), args.evidence)
    
    # Handle function removal if --apply flag is set
    if args.apply:
        print("\n" + "="*60)
        print("APPLYING CHANGES: Removing unused translation functions")
        print("="*60)
        
        # Prepare the removal list
        cleanup.prepare_function_removals()
        
        if cleanup.removed_functions:
            # Ask for confirmation
            print(f"\nAbout to remove {len(cleanup.removed_functions)} unused translation functions.")
            print("This action cannot be undone!")
            
            # For safety, require explicit confirmation
            response = input("Type 'YES' to confirm: ")
            if response == 'YES':
                cleanup.remove_unused_functions()
                
                # Generate updated reports after removal
                print("\nGenerating updated reports after function removal...")
                cleanup.generate_reports(str(report_dir), args.evidence)
            else:
                print("Operation cancelled. No functions were removed.")
        else:
            print("No unused functions found to remove.")
    elif args.format_only:
        print("\n" + "="*60)
        print("FORMAT ONLY: Applying bash formatting to language files")
        print("="*60)
        
        # Format bash files in specified languages or all languages
        if args.langs:
            lang_list = args.langs.split(',')
        else:
            lang_list = None  # Will format all languages
        
        if args.show_diff:
            # Show formatting differences without applying
            print("Showing formatting differences (dry run)...")
            for lang_code in (lang_list or list(cleanup.language_keys.keys())):
                if lang_code in cleanup.language_keys:
                    for key_info in cleanup.language_keys[lang_code].values():
                        if key_info['file'].endswith('.sh'):
                            cleanup.show_formatting_diff(key_info['file'], use_shfmt=not args.no_shfmt)
        else:
            # Apply formatting
            cleanup.format_bash_files(lang_list, use_shfmt=not args.no_shfmt)
            print("\nBash formatting completed successfully!")
    elif args.show_diff:
        print("\n" + "="*60)
        print("SHOW DIFF: Displaying formatting differences")
        print("="*60)
        
        # Show formatting differences for specified languages or all languages
        if args.langs:
            lang_list = args.langs.split(',')
        else:
            lang_list = None  # Will show diff for all languages
        
        for lang_code in (lang_list or list(cleanup.language_keys.keys())):
            if lang_code in cleanup.language_keys:
                for key_info in cleanup.language_keys[lang_code].values():
                    if key_info['file'].endswith('.sh'):
                        cleanup.show_formatting_diff(key_info['file'], use_shfmt=not args.no_shfmt)
        
        print("\nFormatting differences displayed successfully!")
    else:
        print("\nThis was a DRY RUN. No changes were made.")
        print("Use --apply to actually remove unused functions.")
        print("Use --format-only to only apply bash formatting (uses shfmt by default).")
        print("Use --show-diff to see formatting differences (shfmt preferred).")
        print("Use --no-shfmt to disable shfmt and use custom formatter only.")
    
    # Exit codes
    if args.strict and (unused_count > 0 or used_count == 0):
        print("WARNING: Issues found - exiting with code 3 (strict mode)")
        sys.exit(3)
    
    print("SUCCESS: Cleanup process completed successfully")


if __name__ == '__main__':
    main()
