# CLI Translation Function Cleanup

## Overview

This directory contains a **Python-based tool** for cleaning up unused CLI translation functions across all language modules in the v3-development project. The tool automatically identifies and removes unused translation functions to reduce code bloat and maintain clean language files.

## What This Does

1. **Accurately Identifies Unused Functions**: Python-based scanning for reliable detection
2. **Multi-Language Processing**: Handles all supported languages simultaneously
3. **Smart Function Removal**: Automatically detects function boundaries and removes unused code
4. **Comprehensive Reporting**: Generates detailed reports in multiple formats (TSV, JSON, summary)
5. **Safe Operations**: Requires explicit confirmation before deletion and maintains proper spacing
6. **Bash Formatting**: Automatically formats bash files to fix whitespace and formatting issues

## Primary Tool

### `cli-i18n-cleanup.py` (Recommended)
A **Python-based cleanup tool** that provides accurate, reliable translation function cleanup with advanced features.

**Features:**
- **Accurate Usage Detection**: Python-based file scanning for reliable results
- **Multi-Language Support**: Process all languages simultaneously
- **Automatic Function Removal**: Smart detection of function boundaries
- **Comprehensive Reporting**: Multiple output formats (TSV, JSON, summary)
- **Safe Operations**: Requires explicit confirmation before deletion
- **Proper Spacing**: Maintains clean formatting with single empty lines between functions

**Prerequisites:**
- **Python 3.6+** must be installed on your system
- Access to the v3-development repository

**Usage:**
```bash
# Dry run to see what would be cleaned up
python3 cli-i18n-cleanup.py --verbose

# Apply cleanup to English only
python3 cli-i18n-cleanup.py --langs=en --apply

# Process multiple languages
python3 cli-i18n-cleanup.py --langs=en,es,de --apply

# Full cleanup with all languages
python3 cli-i18n-cleanup.py --apply --strict --verbose
```

## Bash Formatting

The cleanup tool includes **intelligent bash formatting** that automatically fixes whitespace and formatting issues that commonly occur when functions are removed.

### 🆕 **Enhanced Bash Formatting with shfmt Integration**

The tool now features **professional-grade bash formatting** with automatic fallback support:

#### **shfmt Integration (Primary Formatter)**
- **Industry Standard**: Uses `shfmt`, the professional shell script formatter used by major projects
- **Automatic Detection**: Automatically detects if `shfmt` is available on your system
- **Professional Quality**: Ensures consistent, industry-standard formatting across all bash files
- **Performance**: Highly optimized for shell script formatting with minimal processing time
- **Standards Compliance**: Follows shell script best practices and formatting conventions

#### **Custom Formatter (Fallback)**
- **Always Available**: Built-in formatter ensures the tool always works, regardless of external dependencies
- **Conservative Approach**: Only fixes whitespace and spacing issues without changing code structure
- **Safe Operations**: Never modifies code logic, content, or function behavior
- **Reliable Fallback**: Ensures formatting is always available, even in restricted environments

#### **Smart Formatter Selection**
The tool automatically chooses the best available formatter:
1. **Primary**: Attempts to use `shfmt` for professional formatting
2. **Fallback**: Uses custom formatter if `shfmt` is unavailable or fails
3. **User Control**: Use `--no-shfmt` to force custom formatter only

### **What Gets Formatted**

- **Consecutive empty lines**: Reduced to single empty lines
- **Function spacing**: Proper spacing before and after function definitions
- **Comment formatting**: Clean spacing around comment blocks
- **File structure**: Consistent indentation and line endings
- **Trailing whitespace**: Removed from end of files
- **File endings**: Exactly one newline at the end of each file
- **JSDoc headers**: Proper spacing for documentation headers
- **🆕 Professional Standards**: Industry-standard shell script formatting when using `shfmt`

### **Formatting Rules**

```bash
# Before function definition - single empty line
previous_content

quickbox::lang::function_name() {

# After function closing - single empty line
}
next_content

# Comment blocks - proper spacing
# File header comment

# Function definition
quickbox::lang::another_function() {
```

### **Format-Only Mode**

You can use the tool **just for formatting** without removing any functions:

```bash
# Format bash files in all languages (uses shfmt by default)
python3 cli-i18n-cleanup.py --format-only

# Format specific languages only (shfmt preferred)
python3 cli-i18n-cleanup.py --format-only --langs=en,es

# Format with custom formatter only (no shfmt)
python3 cli-i18n-cleanup.py --format-only --langs=en,es --no-shfmt

# Using Makefile
make format-only
```

### **Show Formatting Differences**

Preview what formatting changes would be made without applying them:

```bash
# Show formatting differences for all languages (shfmt preferred)
python3 cli-i18n-cleanup.py --show-diff

# Show formatting differences for specific languages
python3 cli-i18n-cleanup.py --show-diff --langs=en,de

# Show custom formatter differences only (no shfmt)
python3 cli-i18n-cleanup.py --show-diff --langs=en,fr --no-shfmt

# Using Makefile
make show-diff
```

### **Automatic Formatting**

When removing functions with `--apply`, formatting is **automatically applied** to fix any whitespace issues created during function removal. The tool will:

1. **Try shfmt first** for professional formatting
2. **Fall back to custom formatter** if shfmt is unavailable
3. **Apply appropriate formatting** based on what's available
4. **Report which formatter was used** for each file

### **shfmt Installation and Setup**

#### **Automatic Detection**
The tool automatically detects `shfmt` if it's available in your system PATH:
```bash
# Check if shfmt is available
which shfmt

# Typical locations
/snap/bin/shfmt          # Snap package (Ubuntu/Debian)
/usr/local/bin/shfmt     # Manual installation
/opt/homebrew/bin/shfmt  # Homebrew (macOS)
```

#### **Manual Installation**
If `shfmt` is not available, you can install it:

**Ubuntu/Debian:**
```bash
# Install via snap (recommended)
sudo snap install shfmt

# Or download binary
wget https://github.com/mvdan/sh/releases/download/v3.6.0/shfmt_v3.6.0_linux_amd64
sudo mv shfmt_v3.6.0_linux_amd64 /usr/local/bin/shfmt
sudo chmod +x /usr/local/bin/shfmt
```

**macOS:**
```bash
# Install via Homebrew
brew install shfmt

# Or download binary
curl -L https://github.com/mvdan/sh/releases/download/v3.6.0/shfmt_v3.6.0_darwin_amd64 -o shfmt
sudo mv shfmt /usr/local/bin/shfmt
sudo chmod +x /usr/local/bin/shfmt
```

**Other Systems:**
```bash
# Download from GitHub releases
# https://github.com/mvdan/sh/releases
# Choose appropriate binary for your system
```

#### **Verification**
After installation, verify `shfmt` is working:
```bash
# Check version
shfmt --version

# Test formatting
echo 'echo "hello world"' | shfmt
```

### **Formatting Control Options**

#### **Command Line Flags**
```bash
# Use shfmt (default behavior)
--format-only

# Disable shfmt, use custom formatter only
--format-only --no-shfmt

# Show formatting differences (shfmt preferred)
--show-diff

# Show custom formatter differences only
--show-diff --no-shfmt
```

#### **Environment Variables**
You can also control formatting behavior with environment variables:
```bash
# Force custom formatter only
export CLI_CLEANUP_NO_SHFMT=1
python3 cli-i18n-cleanup.py --format-only

# Force shfmt only (will fail if not available)
export CLI_CLEANUP_FORCE_SHFMT=1
python3 cli-i18n-cleanup.py --format-only
```

### **Formatting Examples**

#### **Basic Formatting**
```bash
# Format all bash files in all languages
python3 cli-i18n-cleanup.py --format-only

# Format only English and Spanish bash files
python3 cli-i18n-cleanup.py --format-only --langs=en,es

# Using Makefile for formatting
make format-only
```

#### **Formatting with Preview**
```bash
# Show what formatting changes would be made
python3 cli-i18n-cleanup.py --show-diff

# Preview changes for specific languages
python3 cli-i18n-cleanup.py --show-diff --langs=en,fr

# Using Makefile to preview changes
make show-diff
```

#### **Custom Formatter Only**
```bash
# Format with custom formatter only (no shfmt)
python3 cli-i18n-cleanup.py --format-only --langs=en,de --no-shfmt

# Show custom formatter differences only
python3 cli-i18n-cleanup.py --show-diff --langs=en,es --no-shfmt
```

### **Formatting Best Practices**

1. **Install shfmt** for professional-quality formatting
2. **Test formatting first** with `--show-diff` before applying
3. **Use format-only mode** for maintenance without cleanup
4. **Leverage automatic formatting** during function removal
5. **Monitor formatting reports** to see which formatter was used
6. **Fall back gracefully** to custom formatter when needed

### **Formatting Reports**

The tool provides detailed feedback on formatting operations:
```bash
Formatting bash files in languages: en, es, de
Will attempt to use shfmt for formatting (with fallback to custom formatter)
Formatting 16 bash files for en...
  src/config/lang/en/cli/core.sh: using shfmt for formatting
  src/config/lang/en/cli/core.sh: formatted successfully with shfmt
  src/config/lang/en/cli/software.sh: using shfmt for formatting
  src/config/lang/en/cli/software.sh: formatted successfully with shfmt
  ...

Formatting summary:
  Total files processed: 48
  Files formatted with shfmt: 45
  Files formatted with fallback: 3
```

### **Troubleshooting Formatting**

#### **shfmt Not Found**
```bash
# Check if shfmt is installed
which shfmt

# Install if missing (see installation section above)
# The tool will automatically fall back to custom formatter
```

#### **shfmt Fails**
```bash
# Check shfmt version and compatibility
shfmt --version

# Use custom formatter only
python3 cli-i18n-cleanup.py --format-only --no-shfmt
```

#### **Formatting Issues**
```bash
# Preview changes before applying
python3 cli-i18n-cleanup.py --show-diff --langs=en

# Check which formatter was used
python3 cli-i18n-cleanup.py --format-only --verbose
```

## WSD Integration

The cleanup tool can integrate with the **WSD (Web Server Dashboard) project** for cross-project translation analysis. This is useful when you want to scan for translation key usage across multiple related projects.

### Cross-Project Scanning

```bash
# Scan with WSD integration using relative path
python3 cli-i18n-cleanup.py --wsd-path ../wsd --verbose

# Scan with WSD integration using absolute path
python3 cli-i18n-cleanup.py --wsd-path /home/user/GitHub/wsd --verbose

# Using Makefile for WSD integration
make run-with-wsd
```

### WSD Path Detection

The tool automatically checks for WSD in these locations:
1. **Custom path** specified with `--wsd-path`
2. **Sibling directory** (`../wsd/` relative to scan root)
3. **Inside scan root** (`wsd/` subdirectory)
4. **Parent of src directory** (`../../wsd/` when scanning from src/)

### Benefits of WSD Integration

- **Cross-project analysis**: Find translation keys used in both CLI and WSD projects
- **Comprehensive coverage**: Ensure no translation keys are missed across the ecosystem
- **Better cleanup decisions**: More accurate identification of truly unused keys
- **Unified reporting**: Single report covering all related projects

## Configuration Files

The cleanup tool relies on three essential configuration files that work together to enable intelligent translation key detection and cleanup:

### 1. `patterns.conf` - The Detection Engine

This file contains **regex patterns** that tell the Python tool how to find translation key usage throughout your codebase. Each pattern is designed to capture different ways translation keys might be referenced.

**Pattern Types and Their Purpose:**

#### Primary Patterns (Most Important)
```bash
# Function definitions: quickbox::lang::function_name()
\bquickbox::lang::([a-zA-Z0-9_:]+)\s*\(\)

# Function existence checks: declare -F quickbox::lang::function_name
\bdeclare\s+-F\s+quickbox::lang::([a-zA-Z0-9_:]+)

# Function calls: quickbox::lang::function_name (with or without parentheses)
quickbox::lang::([a-zA-Z0-9_:]+)
```

#### Legacy Function Patterns
```bash
# Old-style function calls with quoted keys
\b(mflang|get_lang|qb_lang|print_lang|qb::lang)\s*\(\s*['"]([A-Z0-9_:\-]+)['"]

# Legacy function calls with unquoted keys
\b(mflang|get_lang|qb_lang|print_lang|qb::lang)\s*\(\s*([A-Z0-9_:\-]+)\s*\)
```

#### PHP Integration Patterns
```bash
# PHP direct lookups: $L['KEY'] or $L["KEY"]
\$L\[['\"]([A-Z0-9_:\-]+)['\"]\]
```

#### Generic Fallback Pattern
```bash
# Catches any uppercase key (must be gated by prefix allowlist)
\b([A-Z][A-Z0-9_]{2,})\b
```

**How Patterns Work:**
- **Order matters**: Most specific patterns come first to avoid false matches
- **Capture groups**: Group 1 or 2 captures the actual translation key
- **Regex flags**: Uses extended regex for readability and flexibility
- **Context awareness**: Some patterns are designed for specific file types or contexts

### 2. `prefix-allowlist.conf` - The Safety Filter

This file prevents false positives by defining which prefixes are considered valid translation keys. It acts as a whitelist for the generic uppercase pattern detection.

**Purpose and Functionality:**
- **Prevents noise**: Random uppercase text won't be flagged as translation keys
- **Focuses detection**: Only QuickBox-specific prefixes are considered
- **Reduces false positives**: Makes the cleanup process more accurate
- **Configurable safety**: Easy to add/remove prefixes as needed

**Current Allowlist Categories:**
```bash
# Core QuickBox prefixes
CLI_      # CLI-specific translations and messages
QB_       # QuickBox core system translations
SYSTEM_   # System-level messages and errors
LANG_     # Language-related functionality

# Installation and management
INSTALL_  # Installation process messages
UPDATE_   # Update and upgrade messages
CLEAN_    # Cleanup and maintenance messages

# User and access control
USER_     # User management messages
LOCK_     # Lock/unlock functionality messages

# Software and services
SOFTWARE_ # Software installation messages
DATABASE_ # Database operation messages
DNS_      # DNS configuration messages
SSL_      # SSL certificate messages
VPN_      # VPN configuration messages
WIREGUARD_ # WireGuard VPN messages

# Utilities and helpers
MANAGER_  # Management interface messages
MISC_     # Miscellaneous utility messages
HELP_     # Help and documentation messages
APT_      # Package management messages
WSD_      # WSD plugin messages
```

**How the Allowlist Works:**
- **Prefix matching**: Only keys starting with these prefixes are considered valid
- **Case sensitivity**: Prefixes must match exactly (uppercase)
- **Extensibility**: Easy to add new prefixes for new modules or features
- **Safety**: Prevents accidental detection of random text as translation keys

### 3. `Makefile` - The Automation Layer

This file provides easy access patterns and CI integration for the cleanup tool, making it simple to run different types of analysis and cleanup operations.

**Available Targets:**

#### Testing and Validation
```makefile
test           # Run basic test suite (English only, dry-run)
test-verbose   # Run tests with detailed output
validate       # Validate shell scripts with shellcheck
status         # Show current tool status and dependencies
```

#### Cleanup Operations
```makefile
run-dry-run    # Preview what would be cleaned (safe, no changes)
run-apply      # Actually perform cleanup (requires confirmation)
run-ci         # Run in CI mode (strict checking, non-zero exit on issues)
```

#### Maintenance
```makefile
clean          # Remove temporary files and Python cache
clean-reports  # Remove generated report directories
install-deps   # Install Python dependencies
```

**How the Makefile Works:**
- **Path resolution**: Automatically calculates correct scan paths relative to project root
- **Parameter passing**: Translates simple commands into complex Python tool invocations
- **CI integration**: Provides standardized targets for automated testing
- **Dependency management**: Handles Python package installation and validation

**Example Usage:**
```bash
# Quick test to see what's unused
make test

# See what would be cleaned up (safe preview)
make run-dry-run

# Actually perform the cleanup
make run-apply

# Run in CI environment
make run-ci
```

## How Configuration Files Work Together

The three configuration files create a **smart, safe cleanup system** through this workflow:

### 1. **Detection Phase**
- **`patterns.conf`** provides regex patterns to scan the entire codebase
- **`prefix-allowlist.conf`** filters the generic pattern results to prevent false positives
- The Python tool scans files and builds a comprehensive usage index

### 2. **Analysis Phase**
- Compares defined translation functions against detected usage
- Identifies functions that are defined but never referenced
- Generates detailed reports showing what can be safely removed

### 3. **Cleanup Phase**
- **`Makefile`** provides easy access to different cleanup modes
- Tool automatically detects function boundaries (opening/closing braces)
- Removes entire unused functions while maintaining proper spacing
- Requires explicit confirmation before any deletion

### 4. **Validation Phase**
- Generates comprehensive reports in multiple formats
- Shows before/after statistics for verification
- Maintains audit trail of all changes made

## Advanced Configuration

### Customizing Patterns

To add new detection patterns, edit `patterns.conf`:
```bash
# Add your custom pattern here
\bmy_custom_function\s*\(\s*['"]([A-Z0-9_:\-]+)['"]
```

**Pattern Guidelines:**
- **One pattern per line** for clarity
- **Order from specific to general** to avoid false matches
- **Use capture groups** to extract the translation key
- **Test patterns** with a small subset before full scan

### Extending the Allowlist

To add new prefixes, edit `prefix-allowlist.conf`:
```bash
# Add your new module prefix
NEWMODULE_
```

**Allowlist Guidelines:**
- **Use descriptive prefixes** that clearly identify the module
- **Keep prefixes short** but meaningful
- **Follow existing naming conventions** (uppercase with underscore)
- **Document new prefixes** in comments

### Customizing Makefile Targets

To add new automation targets, edit the `Makefile`:
```makefile
custom-target:
	@echo "Running custom cleanup operation..."
	@python3 cli-i18n-cleanup.py --langs "en,es" --custom-flag
```

## Command Line Options

### Common Options
- `--apply`: Apply cleanups (remove unused functions). Default: dry-run
- `--langs "en,es,fr"`: Comma list of language directories to process. Default: all
- `--verbose`: Verbose output
- `--help`: Show help message

### Advanced Options
- `--strict`: Enable strict QA gates (non-zero exit on failures)
- `--json`: Generate JSON report
- `--tsv`: Generate TSV report
- `--evidence N`: Number of usage examples to include in reports (default: 2)
- `--scan-root PATH`: Root directory to scan for usage (default: current directory)
- `--wsd-path PATH`: Custom path to WSD repository for cross-project scanning

### Formatting Options
- `--format`: Apply bash formatting after function removal (default: enabled)
- `--format-only`: Only format bash files without removing functions
- `--show-diff`: Show formatting differences without applying changes

## Supported Languages

The cleanup operates on all supported CLI language modules:
- English (en)
- German (de) 
- Danish (dk)
- Spanish (es)
- French (fr)
- Portuguese (pt)
- Chinese Simplified (zh-cn)

## What Gets Cleaned Up

The tool identifies and removes translation functions that fall into these categories:

### Unused Functions
- Functions not referenced anywhere in the scanned codebase
- Functions that were moved to other modules but not removed from originals
- Legacy functions from deprecated features
- Functions that are defined but never called

### Function Boundaries
- Automatically detects opening and closing braces
- Removes entire function definitions (not just function names)
- Maintains proper spacing between remaining functions

## Output and Reports

### Generated Files
- `__reports__/YYYYMMDD_HHMMSS/` - Timestamped report directory
- `summary.txt` - Human-readable summary with statistics
- `unused.tsv` - Tab-separated list of unused functions
- `usage-index.tsv` - Complete usage index with examples
- `usage-analysis.json` - Machine-readable JSON report
- `usage-analysis.tsv` - Tab-separated usage analysis

### Report Structure
```markdown
CLI Translation Key Usage Analysis:
- Total keys: X
- Used keys: Y
- Unused keys: Z
- Usage rate: W%
- Per-language breakdown included
```

## Safety Features

### Confirmation Required
- **Explicit confirmation** required before any deletion
- Must type `YES` to confirm function removal
- No accidental deletions possible

### Dry Run Mode
- Default mode shows what would be cleaned up without making changes
- Use `--apply` to actually perform the cleanup

### Validation
- Checks file existence and permissions before operations
- Validates function boundaries during removal
- Creates detailed logs of all operations
- Maintains proper file formatting and spacing

## Recommended Workflow

1. **Ensure Python 3.6+ is installed** on your system
2. **Run dry-run mode first** to see what would be cleaned up
3. **Review the generated reports** to understand what was found
4. **Start with single language** before processing all languages
5. **Apply cleanup** when satisfied with the results
6. **Review the updated files** to verify changes

## Examples

### Quick Assessment
```bash
# See what's unused across all languages
python3 cli-i18n-cleanup.py --verbose
```

### Clean Up English Only
```bash
# Remove unused functions from English modules
python3 cli-i18n-cleanup.py --langs=en --apply
```

### Process Multiple Languages
```bash
# Clean up English, Spanish, and German
python3 cli-i18n-cleanup.py --langs=en,es,de --apply
```

### Generate Specific Reports
```bash
# Generate JSON and TSV reports with 5 usage examples
python3 cli-i18n-cleanup.py --json --tsv --evidence=5
```

### Using Makefile Automation
```bash
# Quick test
make test

# Safe preview
make run-dry-run

# Apply changes
make run-apply

# CI integration
make run-ci
```

### Bash Formatting Examples
```bash
# Format all bash files in all languages
python3 cli-i18n-cleanup.py --format-only

# Format only English and Spanish bash files
python3 cli-i18n-cleanup.py --format-only --langs=en,es

# Using Makefile for formatting
make format-only

# Format specific language with verbose output
python3 cli-i18n-cleanup.py --format-only --langs=de --verbose
```

### Preview Formatting Changes
```bash
# Show what formatting changes would be made
python3 cli-i18n-cleanup.py --show-diff

# Preview changes for specific languages
python3 cli-i18n-cleanup.py --show-diff --langs=en,fr

# Using Makefile to preview changes
make show-diff
```

### WSD Integration Examples
```bash
# Basic WSD integration
python3 cli-i18n-cleanup.py --wsd-path ../wsd --verbose

# WSD integration with specific languages
python3 cli-i18n-cleanup.py --wsd-path ../wsd --langs=en,de --verbose

# WSD integration with cleanup
python3 cli-i18n-cleanup.py --wsd-path ../wsd --langs=en --apply

# Using Makefile for WSD integration
make run-with-wsd
```

## Troubleshooting

### Common Issues
- **Python not found**: Ensure Python 3.6+ is installed and accessible via `python3`
- **Permission denied**: Ensure you have read/write access to the language files
- **No functions found**: Check if language modules exist and contain translation functions
- **Import errors**: Ensure all required Python modules are available

### Debug Mode
Use `--verbose` for detailed logging of all operations and decisions.

### Manual Verification
Check the generated reports in the `__reports__/` directory to verify changes before and after cleanup.

## Integration

This tool integrates seamlessly with the existing project structure:
- Maintains all existing CLI language module functionality
- Adds comprehensive cleanup without breaking changes
- Enhanced reporting includes detailed analysis in multiple formats
- Compatible with existing automation and CI/CD workflows
- Python-based for cross-platform compatibility

## Best Practices

1. **Always run dry-run first** to see what would be cleaned up
2. **Use backups** when applying changes to production systems
3. **Review reports** to understand what was changed
4. **Test in development** before running on production systems
5. **Monitor logs** for any unexpected behavior
6. **Start with single language** before processing all languages
7. **Use Makefile targets** for consistent and repeatable operations
8. **Customize patterns carefully** to avoid false positives
9. **Extend allowlist thoughtfully** to maintain accuracy
10. **Validate changes** with comprehensive testing

## Configuration File Maintenance

### Regular Updates
- **Review patterns quarterly** to catch new usage patterns
- **Update allowlist** when adding new modules or features
- **Test configuration changes** with small language subsets first
- **Document pattern changes** for team awareness

### Version Control
- **Commit configuration changes** separately from tool updates
- **Use descriptive commit messages** explaining pattern additions
- **Test in development** before pushing to shared repositories
- **Maintain configuration history** for troubleshooting

This comprehensive cleanup system provides automated, safe, and intelligent removal of unused translation functions while maintaining the integrity and functionality of your CLI language modules.
