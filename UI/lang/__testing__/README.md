# Translation Validator

A comprehensive validation script for modular PHP i18n translation packs.

## Features

- **Module validation**: Ensures all expected modules exist in each language
- **Key parity**: Checks for missing, extra, and duplicate translation keys
- **Content validation**: Identifies untranslated strings and placeholder mismatches
- **Bridge validation**: Verifies bridge file structure and module includes
- **Encoding checks**: Detects BOM issues
- **Auto-fixing**: Can create missing files and add missing keys (with `--fix`)

## Usage

```bash
# Basic validation of all non-English languages
php validate_translations.php

# Validate specific languages
php validate_translations.php --lang=de --lang=fr

# JSON output for pipeline consumption
php validate_translations.php --json

# Human-readable output with summary only
php validate_translations.php --summary-only

# Show JSON schema documentation
php validate_translations.php --schema

# Control list truncation
php validate_translations.php --limit=10
# or
php validate_translations.php --max-list=10

# Auto-fix issues (creates missing files/keys)
php validate_translations.php --fix

# Strict mode (warnings become errors)
php validate_translations.php --strict
```

## CLI Options

| Option | Description |
|--------|-------------|
| `--lang=<code>` | Validate specific language(s) (e.g., `--lang=de`) |
| `--json` | Output structured JSON instead of human-readable text |
| `--fix` | Automatically fix missing files and keys |
| `--purge-extras` | Remove extra keys (not implemented) |
| `--strict` | Treat warnings as errors |
| `--max-list=<N>` | Limit array output to N items (default: 50) |
| `--limit=<N>` | Alias for `--max-list` |
| `--summary-only` | Suppress per-file details, show breakdown only |
| `--schema` | Display JSON schema and exit |

## Exit Codes

- `0`: All checks passed
- `2`: Warnings found (or warnings + `--strict`)
- `3`: Errors found

## Counting Semantics

The validator uses a **per-module, per-category** counting system:

### Errors (increment per module occurrence)
- **missingFiles**: Module file doesn't exist
- **parseErrors**: Module file can't be parsed
- **missingKeys**: Keys present in English but missing in target
- **duplicates**: Duplicate key definitions within a module
- **placeholderMismatches**: Placeholder count/type mismatch
- **bridgeMissingRequires**: Bridge file missing required module includes

### Warnings (increment per module occurrence)
- **extraKeys**: Keys present in target but not in English
- **untranslated**: Keys with identical English and target values
- **bom**: Byte Order Mark detected
- **bridgeNoLExport**: Bridge file missing `$L` export

**Important**: Each category is counted **once per module**, not per individual key. For example, if `help_manual.php` has 5 missing keys, the `missingKeys` count increases by 1, not 5.

## Output Formats

### Human-Readable Output

```json
Language: de
------------
⚠ 9 warnings
  buttons.php: 3 untranslated keys
  help_manual.php: 5 untranslated keys
  Breakdown — errors: {0} | warnings: {untranslated:9}
```

### JSON Output

The JSON output includes:
- `schemaVersion`: Schema version for compatibility
- `categoryCounts`: Per-language breakdown of error/warning categories
- `issueCounts`: Per-file counts for detailed analysis
- `byCategory`: Global totals across all languages

## Example JSON Structure

```json
{
  "schemaVersion": "1.1.0",
  "baseline": "en",
  "results": {
    "de": {
      "errors": 0,
      "warnings": 9,
      "categoryCounts": {
        "errors": {
          "missingFiles": 0,
          "parseErrors": 0,
          "missingKeys": 0,
          "duplicates": 0,
          "placeholderMismatches": 0,
          "bridgeMissingRequires": 0
        },
        "warnings": {
          "extraKeys": 0,
          "untranslated": 9,
          "bom": 0,
          "bridgeNoLExport": 0
        }
      }
    }
  }
}
```

## Validation Rules

1. **No translation content modification**: The validator never changes existing translation keys or values
2. **Strict key parity**: All English keys must exist in target languages
3. **Placeholder integrity**: Placeholders must match exactly between source and target
4. **Bridge compliance**: Bridge files must include all modules and export `$L`
5. **Encoding standards**: UTF-8 without BOM

## False Positives

Some translation keys may register as "untranslated" warnings when the target language value is identical to the English baseline. This is **not an error** and requires no action in these cases:

- **Technical terms**: Names, brands, file paths, commands that remain the same across languages
- **Placeholder values**: Keys that contain technical content (URLs, code snippets, system paths)
- **Intentional cognates**: Words that are similar or identical across languages

**Example**: A key like `"API"` may legitimately remain "API" in multiple languages as it's a widely recognized technical acronym.

When reviewing warnings, focus on keys that are **actually translatable** rather than technical identifiers that should remain unchanged.

## Integration

The JSON output is designed for CI/CD pipelines and automated reporting. The `categoryCounts` structure allows precise identification of issue types, while `issueCounts` provides detailed per-file analysis.
