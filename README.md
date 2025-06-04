<div class="filament-hidden">

![FilaKit](https://raw.githubusercontent.com/filakitphp/basev4/4.x/art/filakitphp-basev4.png)

</div>

# FilaKit Start Kit Filament 4.x and Laravel 12.x

## About FilaKit

FilaKit is a robust starter kit built on Laravel 12.x and Filament 4.x, designed to accelerate the development of modern
web applications with a ready-to-use multi-panel structure.

## Features

- **Laravel 12.x** - The latest version of the most elegant PHP framework
- **Filament 4.x** - Powerful and flexible admin framework
- **Panel Structure** - Includes three pre-configured panels:
    - Admin Panel (`/admin`) - For authenticated users
- **Environment Configuration** - Centralized configuration through the `config/filakit.php` file

## System Requirements

- PHP 8.2 or higher
- Composer
- Node.js and PNPM

## Installation

Clone the repository
``` bash
laravel new my-app --using=filakitphp/basev4 --database=mysql
```

###  Easy Installation

FilaKit can be easily installed using the following command:

```bash
php install.php
```

This command automates the installation process by:
- Installing Composer dependencies
- Setting up the environment file
- Generating application key
- Setting up the database
- Running migrations
- Installing Node.js dependencies
- Building assets
- Configuring Herd (if used)

### Manual Installation

Install JavaScript dependencies
``` bash
pnpm install
```
Install Composer dependencies
``` bash
composer install
```
Set up environment
``` bash
cp .env.example .env
php artisan key:generate
```

Configure your database in the .env file

Run migrations
``` bash
php artisan migrate
```
Run the server
``` bash
php artisan serve
```

## Installation with Docker

Clone the repository
```bash
laravel new my-app --using=filakitphp/basev4 --database=mysql
```

Move into the project directory
```bash
cd my-app
```

Install Composer dependencies
```bash
composer install
```

Set up environment
```bash
cp .env.example .env
```

Generate the application key
```bash
php artisan key:generate
```

Install JavaScript dependencies
```bash
pnpm install
```

## Authentication Structure

FilaKit comes pre-configured with a custom authentication system that supports different types of users:

- `Admin` - For administrative panel access
- `User` - For application panel access

## Development

``` bash
# Run the development server with logs, queues and asset compilation
composer dev

# Or run each component separately
php artisan serve
php artisan queue:listen --tries=1
pnpm run dev
```

## Customization

### Panel Configuration

Panels can be customized through their respective providers:

- `app/Providers/Filament/AdminPanelProvider.php`

Alternatively, these settings are also consolidated in the `config/filakit.php` file for easier management.

### Themes and Colors

Each panel can have its own color scheme, which can be easily modified in the corresponding Provider files or in the
`filakit.php` configuration file.

### Configuration File

The `config/filakit.php` file centralizes the configuration of the starter kit, including:

- Panel routes
- Middleware for each panel
- Branding options (logo, colors)
- Authentication guards

## Resources

FilaKit includes support for:

- Admin management
- Tailwind CSS integration
- Database queue configuration
- Customizable panel routing and branding

## License

This project is licensed under the [MIT License](LICENSE).

## Credits

Developed by [Jefferson Gonçalves](https://github.com/jeffersongoncalves).
