#!/usr/bin/env python3
"""
CLI Translation Key Cleanup Tool
================================
Main CLI interface that orchestrates translation key cleanup functionality.
"""

import argparse
import sys
from pathlib import Path
from datetime import datetime

from cli_scanner import CLIScanner
from usage_detector import UsageDetector
from wsd_integration import WSDIntegration
from report_generator import ReportGenerator
from function_remover import FunctionRemover
from bash_formatter import BashFormatter


class CLITranslationCleanup:
    """Main CLI translation cleanup orchestrator."""

    def __init__(self, scan_root: str, exclude_patterns: list = None, wsd_path: str = None):
        self.scan_root = Path(scan_root)
        self.exclude_patterns = exclude_patterns or []
        self.wsd_path = wsd_path

        # Initialize components
        self.cli_scanner = CLIScanner()
        self.usage_detector = UsageDetector(scan_root, exclude_patterns)
        self.wsd_integration = WSDIntegration(scan_root, wsd_path)
        self.function_remover = FunctionRemover()
        self.bash_formatter = BashFormatter()

        # Data storage
        self.language_keys = {}
        self.usage_index = {}

    def load_patterns(self, patterns_file: str, allowlist_file: str) -> bool:
        """Load usage patterns and prefix allowlist from files."""
        try:
            # Check if pattern files exist (actual pattern loading is handled by UsageDetector)
            if Path(patterns_file).exists():
                print(f"Pattern file found: {patterns_file}")
            else:
                print(f"Warning: Pattern file not found: {patterns_file}")

            if Path(allowlist_file).exists():
                print(f"Allowlist file found: {allowlist_file}")
            else:
                print(f"Warning: Allowlist file not found: {allowlist_file}")

            return True
        except Exception as e:
            print(f"Error checking pattern files: {e}")
            return False

    def scan_cli_definitions(self, lang_dir: str) -> None:
        """Scan CLI language definition files for translation keys."""
        self.cli_scanner.scan_cli_definitions(lang_dir)
        self.language_keys = self.cli_scanner.get_language_keys()

    def scan_usage_globally(self) -> None:
        """Scan the codebase for usage of translation keys."""
        # Scan main codebase
        self.usage_detector.scan_usage_globally()

        # Scan WSD directories
        self.wsd_integration.scan_wsd_directories()

        # Get combined usage index
        main_usage = self.usage_detector.get_usage_index()
        wsd_usage = self.wsd_integration.get_usage_detector().get_usage_index()

        # Merge usage indices
        self.usage_index = {**main_usage, **wsd_usage}

    def get_usage_stats(self) -> tuple:
        """Get usage statistics."""
        total_keys = sum(len(lang_keys) for lang_keys in self.language_keys.values())
        used_keys = 0

        # Count used keys across all languages with improved matching
        for lang_keys in self.language_keys.values():
            for safe_key, definition in lang_keys.items():
                # Check if the key is directly in usage index
                if safe_key in self.usage_index:
                    used_keys += 1
                    continue

                # Check for partial matches (namespace mismatches)
                actual_key = definition['actual_key']
                if '::' in actual_key:
                    base_name = actual_key.split('::')[-1]
                    base_safe_key = base_name.replace('::', '__')

                    if base_safe_key in self.usage_index:
                        used_keys += 1
                        continue

                    namespace_parts = actual_key.split('::')
                    for part in namespace_parts:
                        if part in self.usage_index:
                            used_keys += 1
                            break

        unused_keys = total_keys - used_keys
        return used_keys, unused_keys, total_keys

    def generate_reports(self, output_dir: str, evidence_count: int = 2) -> None:
        """Generate all reports."""
        report_gen = ReportGenerator(self.language_keys, self.usage_index)
        report_gen.generate_reports(output_dir, evidence_count)

    def prepare_function_removals(self) -> None:
        """Prepare the list of functions to be removed."""
        self.function_remover.prepare_function_removals(self.language_keys, self.usage_index)

    def remove_unused_functions(self) -> None:
        """Remove unused translation functions."""
        self.function_remover.remove_unused_functions()

    def format_bash_files(self, lang_codes: list = None, use_shfmt: bool = True) -> None:
        """Format bash files in specified languages or all languages."""
        self.bash_formatter.format_bash_files(self.language_keys, lang_codes, use_shfmt)

    def show_formatting_diff(self, file_path: str, use_shfmt: bool = True) -> None:
        """Show formatting differences without applying changes."""
        self.bash_formatter.show_formatting_diff(file_path, use_shfmt)


def main():
    parser = argparse.ArgumentParser(
        description='CLI Translation Key Cleanup Tool with Bash Formatting and WSD Systemd Scanning',
        epilog='''
Examples:
  # Dry run to see what would be cleaned up
  python3 cli_i18n_cleanup.py --verbose

  # Apply cleanup to English only
  python3 cli_i18n_cleanup.py --langs=en --apply

  # Format bash files without removing functions (uses shfmt by default)
  python3 cli_i18n_cleanup.py --format-only --langs=en,es

  # Format with custom formatter only (no shfmt)
  python3 cli_i18n_cleanup.py --format-only --langs=en,es --no-shfmt

  # Show formatting differences without applying (shfmt diff preferred)
  python3 cli_i18n_cleanup.py --show-diff --langs=en

  # Scan with custom WSD path for cross-project analysis (includes systemd service scripts)
  python3 cli_i18n_cleanup.py --wsd-path ../wsd --verbose

  # Full cleanup with all languages (includes WSD systemd scanning)
  python3 cli_i18n_cleanup.py --apply --strict --verbose
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
        if (Path(args.scan_root) / 'src' / 'config' / 'lang').exists():
            lang_root = Path(args.scan_root) / 'src' / 'config' / 'lang'
        elif (Path(args.scan_root) / 'config' / 'lang').exists():
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
            lang_dir = Path(args.scan_root) / 'config' / 'lang' / lang

        if lang_dir.exists():
            cleanup.scan_cli_definitions(str(lang_dir))

    # Scan for usage
    cleanup.scan_usage_globally()

    # Get statistics
    used_count, unused_count, total_keys = cleanup.get_usage_stats()
    print(f"Usage scan results:")
    print(f"  Total keys: {total_keys}")
    print(f"  Used keys: {used_count}")
    print(f"  Unused keys: {unused_count}")

    if total_keys == 0:
        print("ERROR: No translation keys found")
        sys.exit(2)

    # Generate reports
    timestamp = datetime.now().strftime('%Y%m%d_%H%M%S')
    if (Path(args.scan_root) / 'src' / 'config' / 'lang').exists():
        report_dir = Path(args.scan_root) / 'src' / 'config' / 'lang' / '__reports__' / timestamp
    else:
        report_dir = Path(args.scan_root) / 'config' / 'lang' / '__reports__' / timestamp

    cleanup.generate_reports(str(report_dir), args.evidence)

    # Handle function removal if --apply flag is set
    if args.apply:
        print("\n" + "="*60)
        print("APPLYING CHANGES: Removing unused translation functions")
        print("="*60)

        cleanup.prepare_function_removals()

        if cleanup.function_remover.has_removed_functions():
            print(f"\nAbout to remove {len(cleanup.function_remover.get_removed_functions())} unused translation functions.")
            print("This action cannot be undone!")

            response = input("Type 'YES' to confirm: ")
            if response == 'YES':
                cleanup.remove_unused_functions()

                # Generate updated reports after removal
                print("\nGenerating updated reports after function removal...")
                cleanup.generate_reports(str(report_dir), args.evidence)
                
                # Automatically apply bash formatting after function removal
                print("\nApplying bash formatting to cleaned files...")
                cleanup.format_bash_files(use_shfmt=True)
                print("Bash formatting completed successfully!")
            else:
                print("Operation cancelled. No functions were removed.")
        else:
            print("No unused functions found to remove.")

    elif args.format_only:
        print("\n" + "="*60)
        print("FORMAT ONLY: Applying bash formatting to language files")
        print("="*60)

        if args.langs:
            lang_list = args.langs.split(',')
        else:
            lang_list = None

        if args.show_diff:
            print("Showing formatting differences (dry run)...")
            for lang_code in (lang_list or list(cleanup.language_keys.keys())):
                if lang_code in cleanup.language_keys:
                    for key_info in cleanup.language_keys[lang_code].values():
                        if key_info['file'].endswith('.sh'):
                            cleanup.show_formatting_diff(key_info['file'], use_shfmt=not args.no_shfmt)
        else:
            cleanup.format_bash_files(lang_list, use_shfmt=not args.no_shfmt)
            print("\nBash formatting completed successfully!")

    elif args.show_diff:
        print("\n" + "="*60)
        print("SHOW DIFF: Displaying formatting differences")
        print("="*60)

        if args.langs:
            lang_list = args.langs.split(',')
        else:
            lang_list = None

        for lang_code in (lang_list or list(cleanup.language_keys.keys())):
            if lang_code in cleanup.language_keys:
                for key_info in cleanup.language_keys[lang_code].values():
                    if key_info['file'].endswith('.sh'):
                        cleanup.show_formatting_diff(key_info['file'], use_shfmt=not args.no_shfmt)

        print("\nFormatting differences displayed successfully!")

    else:
        print("\nThis was a DRY RUN. No changes were made.")
        print("Use --apply to actually remove unused functions (includes automatic formatting).")
        print("Use --format-only to only apply bash formatting (uses shfmt by default).")
        print("Use --show-diff to see formatting differences (shfmt preferred).")
        print("Use --no-shfmt to disable shfmt and use custom formatter only.")
        print("Note: WSD systemd service scripts are automatically scanned for translation key usage.")

    # Exit codes
    if args.strict and (unused_count > 0 or used_count == 0):
        print("WARNING: Issues found - exiting with code 3 (strict mode)")
        sys.exit(3)

    print("SUCCESS: Cleanup process completed successfully")


if __name__ == '__main__':
    main()
