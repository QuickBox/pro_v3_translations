# CLI Translation Tools

This directory contains essential tools for managing and maintaining CLI translation functions across all language modules in the v3-development project.

## Directory Structure

```bash
__tools__/
├── README.md                   # This file - overview of tools
├── cleanup/                    # Translation cleanup utilities
│   ├── README.md               # Detailed cleanup documentation
│   ├── cli-i18n-cleanup.py     # Python-based cleanup tool (recommended)
│   ├── patterns.conf           # Translation key usage patterns
│   ├── prefix-allowlist.conf   # Allowed translation key prefixes
│   └── Makefile                # Build and test automation
```

## Purpose

These tools are designed to:

1. **Maintain Clean Language Files**: Remove unused translation functions automatically
2. **Accurate Usage Detection**: Python-based scanning for reliable key usage analysis
3. **Multi-Language Support**: Process all supported languages simultaneously
4. **Generate Comprehensive Reports**: Detailed analysis with TSV, JSON, and summary formats
5. **Safe Automation**: Automatic function removal with confirmation and proper spacing
6. **Professional Bash Formatting**: **NEW** - Integrated `shfmt` formatter with fallback support

## Key Features

### 🆕 **Enhanced Bash Formatting with shfmt Integration**
- **Professional Quality**: Uses `shfmt` (industry-standard shell script formatter) as the primary formatter
- **Automatic Detection**: Automatically detects if `shfmt` is available on your system
- **Smart Fallback**: Falls back to custom formatter if `shfmt` is unavailable or fails
- **Format Control**: Use `--no-shfmt` to disable `shfmt` and use custom formatter only
- **Diff Preview**: Preview formatting changes before applying them

### **Translation Cleanup**
- **Accurate Usage Detection**: Reliable scanning using Python's built-in file operations
- **Multi-Language Support**: Process all languages simultaneously
- **Automatic Function Removal**: Smart detection of function boundaries
- **Comprehensive Reporting**: Multiple output formats (TSV, JSON, summary)

## Quick Start

### Prerequisites
- **Python 3.6+** must be installed on your system
- **Git repository** with CLI language modules
- **shfmt** (optional but recommended) for professional bash formatting

### For Most Users (Recommended)
```bash
# Navigate to the cleanup tools
cd src/config/lang/__tools__/cleanup

# See what would be cleaned up (dry run)
python3 cli-i18n-cleanup.py --verbose

# Apply cleanup to English only (includes shfmt formatting)
python3 cli-i18n-cleanup.py --langs=en --apply

# Process multiple languages with professional formatting
python3 cli-i18n-cleanup.py --langs=en,es,de --apply

# Format bash files only (uses shfmt by default)
python3 cli-i18n-cleanup.py --format-only --langs=en,es

# Format with custom formatter only (no shfmt)
python3 cli-i18n-cleanup.py --format-only --langs=en,es --no-shfmt
```

### For Advanced Users
```bash
# Full cleanup with all languages (includes shfmt formatting)
python3 cli-i18n-cleanup.py --apply --strict --verbose

# Generate specific report formats
python3 cli-i18n-cleanup.py --json --tsv --evidence=5

# Show formatting differences without applying (shfmt preferred)
python3 cli-i18n-cleanup.py --show-diff --langs=en

# Preview shfmt changes for all languages
python3 cli-i18n-cleanup.py --show-diff
```

## Tool Categories

### Primary Cleanup Tool
- **cli-i18n-cleanup.py**: Python-based cleanup tool with advanced features
  - **🆕 shfmt Integration**: Professional shell script formatting with automatic fallback
  - **Accurate Usage Detection**: Reliable scanning using Python's built-in file operations
  - **Multi-Language Support**: Process all languages simultaneously
  - **Automatic Function Removal**: Smart detection of function boundaries
  - **Comprehensive Reporting**: Multiple output formats (TSV, JSON, summary)
  - **Enhanced Formatting**: Professional bash formatting with `shfmt` + custom fallback

### Configuration Files
- **patterns.conf**: Defines regex patterns for translation key usage detection
- **prefix-allowlist.conf**: Specifies allowed translation key prefixes

## Bash Formatting Features

### **shfmt Integration (Primary)**
- **Industry Standard**: Uses `shfmt`, the professional shell script formatter
- **Automatic Detection**: Automatically finds and uses `shfmt` if available
- **Professional Quality**: Ensures consistent, industry-standard formatting
- **Performance**: Highly optimized for shell script formatting

### **Custom Formatter (Fallback)**
- **Always Available**: Built-in formatter ensures the tool always works
- **Conservative Approach**: Only fixes whitespace and spacing issues
- **Safe Operations**: Never changes code structure or content
- **Reliable Fallback**: Ensures formatting is always available

### **Formatting Control**
```bash
# Use shfmt (default behavior)
python3 cli-i18n-cleanup.py --format-only

# Disable shfmt, use custom formatter only
python3 cli-i18n-cleanup.py --format-only --no-shfmt

# Show formatting differences (shfmt preferred)
python3 cli-i18n-cleanup.py --show-diff

# Show custom formatter differences only
python3 cli-i18n-cleanup.py --show-diff --no-shfmt
```

## Integration

These tools are designed to work seamlessly with:
- All supported CLI language modules (en, de, dk, es, fr, pt, zh-cn)
- The WSD project for cross-project translation analysis
- Existing project structure and workflows
- Python-based automation and CI/CD pipelines
- **🆕 Professional shell script formatting standards**

## Documentation

- **Main cleanup guide**: `cleanup/README.md`
- **Python script help**: Run `python3 cli-i18n-cleanup.py --help` for full options
- **🆕 shfmt integration details**: See `cleanup/README.md` for comprehensive formatting documentation

## Best Practices

1. **Always run dry-run first** to see what would be changed
2. **Ensure Python 3.6+ is installed** before running the tool
3. **Install shfmt for professional formatting** (optional but recommended)
4. **Start with single language** before processing all languages
5. **Test formatting with --show-diff** before applying changes
6. **Use --verbose flag** for detailed operation logging
7. **🆕 Leverage shfmt integration** for industry-standard formatting

## Support

For issues or questions:
1. Check the detailed documentation in each tool's directory
2. Use `--verbose` flag for detailed logging
3. Review generated reports for diagnostic information
4. Test with limited scope (single language) before full cleanup
5. Ensure Python 3.6+ is properly installed and accessible
6. **🆕 Check shfmt availability** with `which shfmt` for optimal formatting
