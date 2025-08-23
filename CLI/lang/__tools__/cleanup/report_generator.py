#!/usr/bin/env python3
"""
Report Generator Module
=======================
Handles report generation in various formats for translation key analysis.
"""

import json
from pathlib import Path
from datetime import datetime
from typing import Dict, List, Tuple


class ReportGenerator:
    """Generates various reports for translation key analysis."""

    def __init__(self, language_keys: Dict[str, Dict[str, Dict]], usage_index: Dict[str, List[Tuple[str, int, str]]]):
        self.language_keys = language_keys
        self.usage_index = usage_index

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
        used_count, unused_count, total_keys = self._get_usage_stats()

        summary_file = output_path / 'summary.txt'
        with open(summary_file, 'w', encoding='utf-8') as f:
            f.write("CLI Translation Key Usage Analysis\n")
            f.write("=================================\n")
            f.write(f"Generated: {datetime.now().strftime('%c')}\n")
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

            f.write("\nThis was a DRY RUN. No changes were made.\n")
            f.write("Use --apply to make actual changes.\n")

        print(f"Summary generated: {summary_file}")

    def _generate_unused_report(self, output_path: Path) -> None:
        """Generate unused keys report."""
        used_count, unused_count, total_keys = self._get_usage_stats()

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

    def _get_usage_stats(self) -> Tuple[int, int, int]:
        """Get usage statistics."""
        # Calculate stats from per-language tracking with proper key matching

        total_keys = sum(len(lang_keys) for lang_keys in self.language_keys.values())
        used_keys = 0

        # Count used keys across all languages with improved matching
        for lang_code, lang_keys in self.language_keys.items():
            for safe_key, definition in lang_keys.items():
                # Check if the key is directly in usage index
                if safe_key in self.usage_index:
                    used_keys += 1
                    continue

                # Check for partial matches (namespace mismatches)
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
