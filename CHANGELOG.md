# Release Notes

## [1.2.0] - 2024-10-26

### 🚀 Infrastructure Updates

- Switched to FrankenPHP as the application server for improved performance
- Integrated Laravel Octane for enhanced server-side performance
- Updated core dependencies to their latest versions

### 🔧 Development Environment

- Added missing .gitignore files for better repository management

### Technical Details

- FrankenPHP migration requires updating deployment configurations
- Laravel Octane integration enables:
  - Faster application boot times
  - Improved request handling performance
  - Reduced memory usage
- All dependencies have been updated to their latest compatible versions
- Development environment now correctly excludes unnecessary files from version control

## [1.1.0] - 2024-01-18

### ✨ New Features
- Added email verification system for user accounts
- Introduced new user settings management system
- Added ability for users to change their password
- Created new endpoint for accessing system translations
- Implemented new configuration management system
- Enhanced user settings handling with dedicated UserSettings system

### 👔 Business Logic & API Enhancements
- Added new endpoint for updating user profile details
- Enhanced notification system functionality
- Improved payload structure for password change events
- Added test helper utilities for user authentication simulation
- Added missing API route for system functionality

### 🗃️ Database Improvements
- Added support for storing user social media profile links
- Optimized handling of country name translations
- Enhanced database migration structure for better performance

### 🔧 System Configuration & Security
- Implemented additional rate limiting controls for improved security
- Fixed default authentication guard configuration
- Prevented duplicate password hashing for better security
- Added Laravel Pennant feature flag system with necessary configurations

### 📚 Documentation Notes
- The system now includes feature flag capabilities through Laravel Pennant
- Enhanced security measures have been implemented through rate limiting
- New social profile functionality allows users to link their social media accounts
- User settings and configuration can now be managed through dedicated endpoints

### Technical Details
- All email-related features require proper SMTP configuration
- Rate limiting settings can be adjusted in the configuration files
- Feature flags can be managed through the Laravel Pennant interface
- Social profile links are stored in a new dedicated database table

## [1.0.0] - 2023-07-23

Initial release
