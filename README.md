# An opinionated boilerplate for Laravel projects

## Features

- Uses [webdevops/php-nginx](https://hub.docker.com/r/webdevops/php-nginx) as a base docker image
  - Default PHP version is 8.2
  - Sets security related headers by default
- Includes [Laravel IDE Helper](https://github.com/barryvdh/laravel-ide-helper) for better IDE support
- Includes [Laravel Debugbar](https://github.com/barryvdh/laravel-debugbar) for better development experience
- Includes [purifier](https://github.com/mewebstudio/Purifier) for sanitizing user input
- Includes [Tailwind CSS](https://tailwindcss.com/)
- Uses [Hashids](https://github.com/coderscantina/hashidable) to obfuscate model ids
- Uses [Laravel Filter](https://github.com/coderscantina/filter) to filter models through request parameters
- Uses [Laravel Transform Requests](https://github.com/coderscantina/laravel-transform-requests) to transform form request data (e.g. to camelCase)
- Uses [Laravel Translations](https://github.com/coderscantina/laravel-translations) to manage translations in the database
- Uses [JWTAuth](https://github.com/tymondesigns/jwt-auth) for API authentication
- Predefined route scheme for API, auth and web routes
- Has a health check endpoint
- Allows users to one-time login via email and pin code
- Allows superusers to impersonate other users
- Includes password reset functionality with [Notifications](https://laravel.com/docs/10.x/notifications)
- Has handy system tables for countries, languages with seeders
- Uses actions to handle synchronous business logic
- Uses [Jobs](https://laravel.com/docs/10.x/queues#creating-jobs) to handle asynchronous business logic
- Extends the user model with frequently used fields 
  - Tracks last login and number of logins 
- Uses accept-language header to set the app locale
