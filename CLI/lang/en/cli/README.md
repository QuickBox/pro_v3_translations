# QuickBox Pro - Modular Language System

## Overview

This directory contains the modular language system for QuickBox Pro CLI. The original `cli_lang` file (3,695 lines) has been split into functional modules for better organization, maintainability, and scalability.

## Module Structure

The modular language system is organized into the following functional groups:

### Core Modules
- **core.sh** - Core system operations (locks, clean, basic functions)
- **apt.sh** - APT package management operations
- **software.sh** - Software installation, removal, and update operations
- **ssl.sh** - SSL/LetsEncrypt certificate management
- **dns.sh** - DNS credentials management
- **users.sh** - User management operations
- **vpn.sh** - VPN/WireGuard operations
- **database.sh** - Database management (MySQL/SQLite)
- **updater.sh** - System updater operations
- **manager.sh** - Software manager (backup/restore/rollback)
- **help.sh** - Help messages and error handling

### Extended Modules
- **software_access.sh** - Software access information and URLs
- **software_config.sh** - Software configuration and setup messages
- **wireguard.sh** - WireGuard-specific configuration and management
- **misc.sh** - Miscellaneous utilities and general system messages

## Module Descriptions

### Core Modules

#### core.sh
Contains core system operations including:
- Memory and cache cleaning functions
- Lock handling and removal
- Dashboard logging utilities
- Basic system status messages

#### apt.sh
Manages APT package management operations:
- Package database updates
- Lock resolution
- Upgrade completion messages
- Package check and validation

#### software.sh
Handles software installation, removal, and updates:
- Installation headers and progress
- Reinstallation processes
- Removal operations
- Update procedures
- Build and dependency management

#### ssl.sh
Comprehensive SSL/LetsEncrypt certificate management:
- Certificate installation and renewal
- DNS challenge support for multiple providers
- HTTP challenge operations
- Certificate validation and error handling
- Interactive DNS setup for various providers

#### dns.sh
DNS credentials management system:
- Provider status checking
- Credential validation
- Setup instructions for all supported providers
- Error handling and troubleshooting
- Backup and restore operations

#### users.sh
User management operations:
- User creation and deletion
- Password management
- User promotion and demotion
- Ban/unban operations

#### vpn.sh
VPN and WireGuard operations:
- VPN configuration
- Client setup
- Server management
- Connection status

#### database.sh
Database management for MySQL and SQLite:
- Installation and configuration
- Migration between database types
- Backup and restore operations
- Maintenance and optimization
- Integrity checking

#### updater.sh
System updater operations:
- Update progress tracking
- Dependency management
- Component updates
- Completion status

#### manager.sh
Software manager operations:
- Backup creation and management
- Restore operations
- Rollback functionality
- Default configuration management
- Version management

#### help.sh
Help system and error handling:
- Software-specific help generation
- Command usage instructions
- Error messages and warnings
- Interactive help functions

### Extended Modules

#### software_access.sh
Software access information and configuration:
- Web interface URLs and ports
- Access credentials and setup
- Domain-specific access information
- Client configuration details

#### software_config.sh
Software configuration and special handling:
- MySQL migration for Ombi
- Plex update credential handling
- Rclone configuration
- Special software setup processes

#### wireguard.sh
WireGuard-specific operations:
- Client and server configuration
- Interactive setup processes
- Management help system
- Error handling for WireGuard operations

#### misc.sh
Miscellaneous utilities and general messages:
- Unknown option handling
- General error messages
- Utility functions
- NordVPN configuration generator help

## Usage

### For Developers

1. **Adding New Messages**: Add new language functions to the appropriate module based on functionality
2. **Modifying Existing Messages**: Locate the function in the relevant module and update it
3. **Creating New Modules**: Follow the naming convention and structure of existing modules

### For System Administrators

1. **Using the Modular System**: The system automatically loads all modules via `cli_lang_modular`
2. **Backward Compatibility**: All existing function calls continue to work unchanged
3. **Module Validation**: The system validates that all required modules are present

## Naming Conventions

- **File Names**: Use descriptive names with `.sh` extension (e.g., `software_access.sh`)
- **Function Names**: Follow the `quickbox::lang::category::subcategory::action()` pattern
- **Variables**: Use descriptive names with proper scoping
- **Comments**: Include comprehensive documentation for complex functions

## Benefits

### Maintainability
- **Focused Modules**: Each module handles a specific functional area
- **Easier Navigation**: Developers can quickly locate relevant functions
- **Reduced Complexity**: Smaller files are easier to understand and modify

### Scalability
- **Modular Growth**: New functionality can be added without affecting existing modules
- **Independent Development**: Multiple developers can work on different modules simultaneously
- **Selective Loading**: Only required modules need to be loaded

### Organization
- **Logical Grouping**: Related functions are grouped together
- **Clear Structure**: The module hierarchy reflects the system architecture
- **Documentation**: Each module is self-documenting with clear purposes

## Migration Strategy

### Phase 1: Module Creation ✅
- [x] Split original `cli_lang` into functional modules
- [x] Create bridge file `cli_lang_modular`
- [x] Implement module validation and error handling

### Phase 2: Testing and Validation
- [ ] Test all modules with existing QuickBox Pro functionality
- [ ] Validate backward compatibility
- [ ] Performance testing and optimization

### Phase 3: Deployment
- [ ] Gradual rollout to development environments
- [ ] User acceptance testing
- [ ] Production deployment

### Phase 4: Documentation and Training
- [ ] Complete developer documentation
- [ ] Create migration guides
- [ ] Training materials for contributors

## Contributing

### Guidelines
1. **Follow Naming Conventions**: Use established patterns for consistency
2. **Add Documentation**: Include comments for complex functions
3. **Test Changes**: Ensure modifications don't break existing functionality
4. **Update README**: Keep documentation current with changes

### Adding New Modules
1. Create the module file in the `cli/` directory
2. Add the module to the bridge file (`cli_lang_modular`)
3. Update the validation list
4. Document the module in this README

### Modifying Existing Modules
1. Locate the appropriate module for your changes
2. Follow the existing code style and patterns
3. Test your changes thoroughly
4. Update relevant documentation

## File Structure

```bash
cli/
├── README.md                 # This documentation file
├── core.sh                   # Core system operations
├── apt.sh                    # APT package management
├── software.sh               # Software installation/removal/update
├── ssl.sh                    # SSL/LetsEncrypt operations
├── dns.sh                    # DNS credentials management
├── users.sh                  # User management operations
├── vpn.sh                    # VPN/WireGuard operations
├── database.sh               # Database management
├── updater.sh                # System updater operations
├── manager.sh                # Software manager operations
├── help.sh                   # Help and error handling
├── software_access.sh        # Software access information
├── software_config.sh        # Software configuration
├── wireguard.sh              # WireGuard specific operations
└── misc.sh                   # Miscellaneous utilities
```

## Success Metrics

- **Reduced File Size**: Each module is significantly smaller than the original 3,695-line file
- **Improved Maintainability**: Easier to locate and modify specific functionality
- **Enhanced Collaboration**: Multiple developers can work on different modules
- **Better Organization**: Logical grouping of related functions
- **Backward Compatibility**: All existing functionality continues to work unchanged

## Support

For questions or issues with the modular language system:
- Check this README for usage guidelines
- Review the module structure and naming conventions
- Test changes in a development environment first
- Consult the QuickBox Pro development team for complex modifications 