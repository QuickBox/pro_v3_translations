#!/usr/bin/env python3
"""
WSD Integration Module
======================
Handles WSD cross-project scanning logic for translation key usage.
"""

import os
from pathlib import Path
from usage_detector import UsageDetector


class WSDIntegration:
    """Handles WSD cross-project scanning for translation key usage."""

    def __init__(self, scan_root: str, wsd_path: str = None):
        self.scan_root = Path(scan_root)
        self.wsd_path = Path(wsd_path) if wsd_path else None
        self.usage_detector = UsageDetector(scan_root)

    def scan_wsd_directories(self) -> None:
        """Scan WSD-related directories for translation key usage, including systemd service scripts."""
        print("Scanning WSD directories for translation key usage...")

        wsd_paths = []

        # Add custom WSD path if provided
        if self.wsd_path:
            wsd_paths.append(self.wsd_path)

        # Add default search paths for WSD
        wsd_paths.extend([
            # Check if WSD is a sibling directory (same level as v3-development)
            self.scan_root.parent / 'wsd',
            # Check if WSD is inside the current scan root
            self.scan_root / 'wsd',
            # Check if we're already in the src directory
            self.scan_root.parent.parent / 'wsd',
            # Check if WSD is at the same level as the current working directory
            Path.cwd().parent / 'wsd',
            # Check if WSD is two levels up from current working directory
            Path.cwd().parent.parent / 'wsd'
        ])

        wsd_found = False
        for wsd_path in wsd_paths:
            if wsd_path.exists():
                print(f"Scanning WSD directory: {wsd_path}")

                # Scan the main WSD CLI binary
                wsd_cli = wsd_path / 'cli' / 'bin' / 'qb-wsd'
                if wsd_cli.exists():
                    print(f"  Scanning WSD CLI binary: {wsd_cli}")
                    self.usage_detector._scan_single_file(wsd_cli)

                # CRITICAL: Scan the systemd directory for service scripts
                wsd_systemd = wsd_path / 'systemd'
                if wsd_systemd.exists():
                    print(f"  Scanning WSD systemd directory: {wsd_systemd}")
                    self._scan_systemd_directory(wsd_systemd)
                else:
                    print(f"  WSD systemd directory not found at: {wsd_systemd}")

                # Also scan other relevant WSD directories
                wsd_cli_dir = wsd_path / 'cli'
                if wsd_cli_dir.exists():
                    print(f"  Scanning WSD CLI directory: {wsd_cli_dir}")
                    self.usage_detector._scan_directory_recursively(wsd_cli_dir)

                wsd_found = True
                break

        if not wsd_found:
            print("WSD directories not found. Checked paths:")
            for wsd_path in wsd_paths:
                print(f"  - {wsd_path}")
            print("Note: WSD scanning is optional but recommended for complete translation coverage")
        else:
            print("WSD scanning completed successfully")

    def _scan_systemd_directory(self, systemd_dir: Path) -> None:
        """Scan systemd directory for translation key usage in service scripts."""
        print(f"  Scanning systemd directory: {systemd_dir}")

        # Define file extensions to scan in systemd directory
        systemd_extensions = {'.sh', '.service', '.timer', '.target', ''}

        scanned_files = 0
        found_keys = 0

        try:
            for root, dirs, files in os.walk(systemd_dir):
                for file in files:
                    file_path = Path(root) / file

                    # Only scan files with relevant extensions
                    if file_path.suffix not in systemd_extensions:
                        continue

                    # Skip non-script files (like .service files) unless they have no extension
                    if file_path.suffix == '.service' and not file_path.stem.endswith('.sh'):
                        continue

                    scanned_files += 1

                    # Scan this file for translation key usage
                    keys_found = self.usage_detector._scan_single_file(file_path)  # pylint: disable=protected-access
                    found_keys += keys_found

                    if keys_found > 0:
                        print(f"    Found {keys_found} translation keys in: {file_path.name}")

            print(f"  Systemd directory scan completed: {scanned_files} files scanned, {found_keys} translation keys found")

        except Exception as e:
            print(f"  Warning: Error scanning systemd directory {systemd_dir}: {e}")

    def get_usage_detector(self) -> UsageDetector:
        """Get the usage detector instance."""
        return self.usage_detector
