# CLI Translation Key Cleanup Tool

A modular Python tool for detecting and cleaning up unused CLI translation keys in QuickBox projects, with enhanced WSD systemd service script scanning.

## 🏗️ **Modular Architecture**

The tool has been refactored into logical, maintainable modules:

### **Core Modules**
- **`cli_scanner.py`** (147 lines) - CLI definition parsing and language handling
- **`usage_detector.py`** (239 lines) - File scanning and usage pattern matching
- **`wsd_integration.py`** (117 lines) - WSD cross-project scanning logic
- **`report_generator.py`** (211 lines) - Report generation in various formats
- **`function_remover.py`** (214 lines) - Function boundary detection and removal
- **`bash_formatter.py`** (337 lines) - Bash file formatting (shfmt + custom)

### **Main Interface**
- **`cli_i18n_cleanup.py`** (329 lines) - Main CLI orchestration

## 🚀 **Features**

- **Complete Translation Coverage**: Scans both v3-development and WSD projects
- **WSD Systemd Integration**: Automatically scans `/home/echo/GitHub/wsd/systemd/` for service scripts
- **Multiple Report Formats**: JSON, TSV, and human-readable summaries
- **Bash Formatting**: Integrated shfmt with custom formatter fallback
- **Function Removal**: Safe removal of unused translation functions
- **Cross-Project Analysis**: Handles multiple repository structures

## 📋 **Usage**

### **Basic Commands**

```bash
# Dry run to see what would be cleaned up
python3 cli_i18n_cleanup.py --verbose

# Apply cleanup to English only
python3 cli_i18n_cleanup.py --langs=en --apply

# Format bash files without removing functions
python3 cli_i18n_cleanup.py --format-only --langs=en,es

# Show formatting differences without applying
python3 cli_i18n_cleanup.py --show-diff --langs=en
```

### **WSD Integration**

```bash
# Scan with custom WSD path for cross-project analysis
python3 cli_i18n_cleanup.py --wsd-path ../wsd --verbose

# Full cleanup with all languages (includes WSD systemd scanning)
python3 cli_i18n_cleanup.py --apply --strict --verbose
```

### **Advanced Options**

```bash
# Custom scan root
python3 cli_i18n_cleanup.py --scan-root /path/to/project

# Exclude specific patterns
python3 cli_i18n_cleanup.py --exclude "node_modules" --exclude "vendor"

# Custom evidence count for reports
python3 cli_i18n_cleanup.py --evidence 5

# Disable shfmt, use custom formatter only
python3 cli_i18n_cleanup.py --format-only --no-shfmt
```

## 🔍 **What Gets Scanned**

### **v3-development Project**
- `src/` directory (main source code)
- CLI language definitions in `src/config/lang/<lang>/`
- All relevant file types (`.sh`, `.php`, `.js`, etc.)

### **WSD Project**
- CLI binary (`cli/bin/qb-wsd`)
- CLI directory (`cli/`)
- **Systemd service scripts** (`systemd/`) - **NEW!**
- Service files, timers, and targets

## 📊 **Output Reports**

The tool generates comprehensive reports in the `__reports__/` directory:

- **`summary.txt`** - Human-readable overview
- **`unused.tsv`** - Tab-separated list of unused keys
- **`usage-index.tsv`** - Complete usage index
- **`usage-analysis.json`** - Structured JSON data
- **`usage-analysis.tsv`** - Tab-separated analysis

## 🛡️ **Safety Features**

- **Dry-run by default** - No changes unless `--apply` is used
- **Confirmation required** - Must type 'YES' to confirm function removal
- **Function boundary detection** - Precise identification of function boundaries
- **Safety thresholds** - Won't remove functions over 50 lines
- **Backup reports** - Generated before and after any changes

## 🔧 **Technical Details**

### **Line Count Compliance**
- All modules are under the 1000-line Pylint limit
- Total codebase: ~1,700 lines (vs. 1,485 in original monolithic file)
- Improved maintainability and testability

### **Import Structure**
```python
from cli_scanner import CLIScanner
from usage_detector import UsageDetector
from wsd_integration import WSDIntegration
from report_generator import ReportGenerator
from function_remover import FunctionRemover
from bash_formatter import BashFormatter
```

### **Dependencies**
- Python 3.6+
- Standard library only (no external packages)
- Optional: `shfmt` for bash formatting (with fallback)

## 📝 **Migration Notes**

- **Backward Compatible**: All existing CLI arguments work identically
- **Same Output**: Reports and behavior unchanged
- **Enhanced Functionality**: WSD systemd scanning added
- **Better Performance**: Modular structure allows for future optimizations

## 🐛 **Troubleshooting**

### **Common Issues**

1. **No translation keys found**
   - Check scan root path
   - Verify language directory structure
   - Ensure patterns.conf exists

2. **WSD scanning fails**
   - Verify WSD repository path
   - Check file permissions
   - Review console output for specific errors

3. **Function removal issues**
   - Review function boundary detection
   - Check for malformed function definitions
   - Verify file encoding (UTF-8)

### **Debug Mode**
```bash
python3 cli_i18n_cleanup.py --verbose --scan-root . --langs=en
```

## 🤝 **Contributing**

The modular structure makes it easy to:
- Add new scanning patterns
- Implement additional report formats
- Extend WSD integration
- Add new language support

Each module has a single responsibility and clear interfaces.

## 📄 **License**

Part of the QuickBox project - see main project license for details.
