# QuickBox Dashboard Translation System

This directory contains the English language files for the QuickBox Dashboard's modular translation system. This document explains the structure, usage, and contribution guidelines for the translation system.

## Table of Contents

- [QuickBox Dashboard Translation System](#quickbox-dashboard-translation-system)
  - [Table of Contents](#table-of-contents)
  - [Overview](#overview)
  - [Directory Structure](#directory-structure)
  - [Translation Files](#translation-files)
    - [File Structure](#file-structure)
    - [Naming Conventions](#naming-conventions)
  - [Adding New Translations](#adding-new-translations)
  - [Modifying Existing Translations](#modifying-existing-translations)
  - [Translation Keys](#translation-keys)
    - [Key Structure](#key-structure)
    - [Key Naming Guidelines](#key-naming-guidelines)
  - [Best Practices](#best-practices)
  - [Contributing](#contributing)
    - [For Translators](#for-translators)
    - [For Developers](#for-developers)
  - [Validation and Testing](#validation-and-testing)
    - [Validation Scripts](#validation-scripts)
    - [Testing New Translations](#testing-new-translations)
  - [Troubleshooting](#troubleshooting)
    - [Common Issues](#common-issues)
    - [Getting Help](#getting-help)

## Overview

The QuickBox Dashboard uses a modular translation system that separates translations into logical files based on their functional areas. This makes the translation system more maintainable and easier to work with than the previous monolithic approach.

## Directory Structure

```bash
src/dashboard/lang/
├── en/                     # English language files
│   ├── buttons.php         # Button labels and actions
│   ├── dashboard.php       # Main dashboard interface elements
│   ├── errors.php          # Error messages and validation
│   ├── help_manual.php     # Help documentation and tooltips
│   ├── misc.php            # Miscellaneous translations
│   ├── navigation.php      # Navigation menu items
│   ├── pages.php           # Page-specific translations
│   ├── popup.php           # Popup dialog messages
│   ├── settings.php        # Settings page translations
│   ├── system.php          # System-related messages
│   ├── user_management.php # User management interface
│   ├── widgets.php         # Dashboard widget content
│   └── README.md           # This file
├── __testing__/            # Testing and validation scripts
├── lang_en.php             # Main English translations
└── lang_en_override.php    # Translation overrides
```

## Translation Files

### File Structure

Each translation file should return an associative array where:
- Keys are the translation keys (in UPPER_SNAKE_CASE)
- Values are the translated strings

Example (`buttons.php`):

```php
<?php
/**
 * Button Labels and Actions
 * 
 * This file contains translations for buttons and action elements used throughout the dashboard.
 */

return [
    'SAVE' => 'Save',
    'CANCEL' => 'Cancel',
    'EDIT' => 'Edit',
    'DELETE' => 'Delete',
    'SUBMIT' => 'Submit',
    'RESET' => 'Reset',
    'CLOSE' => 'Close',
    'BACK' => 'Back',
    'NEXT' => 'Next',
    'CONFIRM' => 'Confirm',
    'DISMISS' => 'Dismiss',
    'ENABLE' => 'Enable',
    'DISABLE' => 'Disable',
    'UPDATE' => 'Update',
    'REMOVE' => 'Remove',
    'ADD' => 'Add',
    'SEARCH' => 'Search',
    'FILTER' => 'Filter',
    'SORT' => 'Sort',
    'MORE' => 'More',
    'LESS' => 'Less',
    'APPLY' => 'Apply',
    'CLEAR' => 'Clear',
    'UPLOAD' => 'Upload',
    'DOWNLOAD' => 'Download',
    'PREVIEW' => 'Preview',
    'SELECT' => 'Select',
    'VIEW_DETAILS' => 'View Details',
    'MANAGE' => 'Manage',
    'CONFIGURE' => 'Configure',
    'SETTINGS' => 'Settings',
    'PREFERENCES' => 'Preferences',
    'ADVANCED' => 'Advanced',
    'LOADING' => 'Loading...',
    'PROCESSING' => 'Processing...',
    'PLEASE_WAIT' => 'Please wait...',
    'SUCCESS' => 'Success!',
    'ERROR' => 'Error!',
    'WARNING' => 'Warning!',
    'INFO' => 'Info',
    'HELP' => 'Help'
];
```

### Naming Conventions

1. **File Names**: Use lowercase with underscores (e.g., `user_management.php`)
2. **Translation Keys**: Use UPPER_SNAKE_CASE (e.g., `USERNAME_REQUIRED`)
3. **Comments**: Include PHPDoc blocks at the top of each file and for complex translations

## Adding New Translations

1. **Choose the appropriate file** based on the translation's purpose
2. **Add the new translation** with a descriptive key
3. **Add comments** for context if needed
4. **Update the README** if you're adding a new category

Example:

```php
// In appropriate file (e.g., user_management.php)
return [
    // ... existing translations ...
    'TWO_FACTOR_AUTH' => 'Two-Factor Authentication',
    'TWO_FACTOR_AUTH_DESCRIPTION' => 'Add an extra layer of security to your account',
];
```

## Modifying Existing Translations

1. **Find the key** in the appropriate file
2. **Update the value** while maintaining the same key
3. **Update any related documentation** if the meaning has changed

## Translation Keys

### Key Structure

Translation keys follow these patterns:

- `NOUN_VERB`: `USER_CREATED`, `PASSWORD_CHANGED`
- `NOUN_DESCRIPTION`: `ACCOUNT_SETTINGS_DESCRIPTION`
- `NOUN_LABEL`: `USERNAME_LABEL`
- `NOUN_PLACEHOLDER`: `SEARCH_PLACEHOLDER`
- `NOUN_TOOLTIP`: `API_KEY_TOOLTIP`
- `ERROR_NOUN_VERB`: `ERROR_USER_NOT_FOUND`
- `SUCCESS_NOUN_VERB`: `SUCCESS_USER_CREATED`

### Key Naming Guidelines

1. Be descriptive but concise
2. Group related keys together
3. Use consistent terminology
4. Avoid abbreviations unless widely understood

## Best Practices

1. **Consistency**: Use consistent terminology and style
2. **Context**: Provide context for ambiguous terms
3. **Variables**: Use `{variable}` syntax for dynamic content
4. **HTML**: Include minimal HTML only when necessary
5. **Length**: Keep translations concise
6. **Comments**: Add comments for complex or ambiguous translations

## Contributing

### For Translators

1. **Fork** the repository
2. **Create a branch** for your translations
3. **Submit a pull request** with your changes
4. **Reference any related issues** in your PR

### For Developers

1. **Add new translations** to the appropriate module
2. **Update tests** if needed
3. **Run validation** before submitting PRs
4. **Document changes** in the PR description

## Validation and Testing

### Validation Scripts

Run the validation script to check for issues:

```bash
php src/dashboard/lang/__testing__/validate_translations.php
```

### Testing New Translations

1. Clear any opcache if enabled
2. Test all affected UI elements
3. Verify dynamic content replacement
4. Check for proper escaping

## Troubleshooting

### Common Issues

1. **Missing Translations**: Check the correct file and key
2. **Broken HTML**: Verify all tags are properly closed
3. **Variable Mismatch**: Ensure all `{variables}` match between translations
4. **Caching Issues**: Clear your browser cache and PHP opcache

### Getting Help

If you encounter issues:
1. Check the existing issues for similar problems
2. Consult the QuickBox documentation
3. Open a new issue with details about the problem

---

This documentation is part of the QuickBox Dashboard translation system.
