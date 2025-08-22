# Makefile for CLI i18n Cleanup Tools
# Provides easy testing and CI integration

.PHONY: help test test-verbose clean clean-reports run-dry-run run-apply run-ci format format-only show-diff format-shfmt format-custom

help:
	@echo "CLI Translation Key Cleanup Tools"
	@echo "================================="
	@echo ""
	@echo "Available targets:"
	@echo "  test           - Run test suite"
	@echo "  test-verbose   - Run tests with verbose output"
	@echo "  run-dry-run    - Run cleanup in dry-run mode (default)"
	@echo "  run-apply      - Run cleanup and apply changes"
	@echo "  run-ci         - Run cleanup in CI mode (strict, JSON+TSV)"
	@echo "  run-with-wsd   - Run cleanup with WSD integration"
	@echo "  format         - Format bash files in all languages (shfmt preferred)"
	@echo "  format-only    - Format bash files without removing functions (shfmt preferred)"
	@echo "  format-shfmt   - Format bash files using shfmt only (will fail if not available)"
	@echo "  format-custom  - Format bash files using custom formatter only (no shfmt)"
	@echo "  show-diff      - Show formatting differences without applying (shfmt preferred)"
	@echo "  show-diff-custom - Show custom formatter differences only (no shfmt)"
	@echo "  clean          - Clean temporary files"
	@echo "  clean-reports  - Clean generated reports"
	@echo "  validate       - Validate shell scripts"
	@echo "  install-deps   - Install dependencies"
	@echo "  install-shfmt  - Install shfmt for professional formatting"
	@echo "  status         - Show current status"

test:
	@echo "Running CLI i18n cleanup tools test suite..."
	@python3 cli-i18n-cleanup.py --langs "en" --scan-root "../../../.." --verbose --json --tsv

test-verbose:
	@echo "Running CLI i18n cleanup tools test suite (verbose)..."
	@python3 cli-i18n-cleanup.py --langs "en" --scan-root "../../../.." --verbose --json --tsv

run-dry-run:
	@echo "Running CLI i18n cleanup in dry-run mode..."
	@python3 cli-i18n-cleanup.py --langs "en" --scan-root "../../../.." --verbose --json --tsv

run-apply:
	@echo "Running CLI i18n cleanup with apply mode..."
	@python3 cli-i18n-cleanup.py --langs "en" --scan-root "../../../.." --verbose --json --tsv --apply

run-ci:
	@echo "Running CLI i18n cleanup in CI mode..."
	@python3 cli-i18n-cleanup.py --langs "en" --scan-root "../../../.." --verbose --json --tsv --strict

run-with-wsd:
	@echo "Running CLI i18n cleanup with WSD integration..."
	@python3 cli-i18n-cleanup.py --langs "en" --scan-root "../../../.." --wsd-path "../../../wsd" --verbose --json --tsv

format:
	@echo "Formatting bash files in all languages (shfmt preferred)..."
	@python3 cli-i18n-cleanup.py --scan-root "../../../.." --format-only

format-only:
	@echo "Formatting bash files in all languages (format only, shfmt preferred)..."
	@python3 cli-i18n-cleanup.py --scan-root "../../../.." --format-only

format-shfmt:
	@echo "Formatting bash files using shfmt only (will fail if not available)..."
	@python3 cli-i18n-cleanup.py --scan-root "../../../.." --format-only --no-shfmt

format-custom:
	@echo "Formatting bash files using custom formatter only (no shfmt)..."
	@python3 cli-i18n-cleanup.py --scan-root "../../../.." --format-only --no-shfmt

show-diff:
	@echo "Showing formatting differences for all languages (shfmt preferred)..."
	@python3 cli-i18n-cleanup.py --scan-root "../../../.." --show-diff

show-diff-custom:
	@echo "Showing custom formatter differences for all languages (no shfmt)..."
	@python3 cli-i18n-cleanup.py --scan-root "../../../.." --show-diff --no-shfmt

clean:
	@echo "Cleaning temporary files..."
	@rm -f *.tmp *.log
	@rm -rf __pycache__/

clean-reports:
	@echo "Cleaning generated reports..."
	@rm -rf ../../../../config/lang/__reports__/

validate:
	@echo "Validating shell scripts..."
	@if command -v shellcheck >/dev/null 2>&1; then \
		echo "Running shellcheck..."; \
		shellcheck --severity=error *.sh lib/*.sh; \
	else \
		echo "shellcheck not available, skipping validation"; \
	fi

install-deps:
	@echo "Installing Python dependencies..."
	@python3 -m pip install --user pathlib typing

install-shfmt:
	@echo "Installing shfmt for professional bash formatting..."
	@if command -v snap >/dev/null 2>&1; then \
		echo "Installing via snap..."; \
		sudo snap install shfmt; \
	elif command -v brew >/dev/null 2>&1; then \
		echo "Installing via Homebrew..."; \
		brew install shfmt; \
	else \
		echo "Manual installation required:"; \
		echo "  Ubuntu/Debian: sudo snap install shfmt"; \
		echo "  macOS: brew install shfmt"; \
		echo "  Other: Download from https://github.com/mvdan/sh/releases"; \
	fi

status:
	@echo "CLI Translation Cleanup Tools Status"
	@echo "==================================="
	@echo "Python script: $(shell test -f cli-i18n-cleanup.py && echo "✓ Available" || echo "✗ Missing")"
	@echo "Patterns file: $(shell test -f patterns.conf && echo "✓ Available" || echo "✗ Missing")"
	@echo "Allowlist file: $(shell test -f prefix-allowlist.conf && echo "✓ Available" || echo "✗ Missing")"
	@echo "Bash scripts: $(shell test -f cleanup-translation-keys.sh && echo "✓ Available (legacy)" || echo "✗ Missing")"
	@echo ""
	@echo "🆕 Enhanced Formatting Status:"
	@if command -v shfmt >/dev/null 2>&1; then \
		echo "  shfmt: ✓ Available - Professional formatting enabled"; \
		shfmt --version | head -1; \
	else \
		echo "  shfmt: ✗ Not available - Will use custom formatter"; \
		echo "  Install with: make install-shfmt"; \
	fi
	@echo ""
	@echo "Recommendation: Use Python version (cli-i18n-cleanup.py) for reliable results"
	@echo "🆕 Install shfmt for professional-quality bash formatting"
