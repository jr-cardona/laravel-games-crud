<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p>
<h1 align="center">Games CRUD</h1>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

- [Installation](#installation)
- [License](#license)

### Installation
#### Requirements
- PHP ^8.1
- HTTP server with PHP support (eg: Apache, Nginx, Caddy)
- Composer
- Git
- MySQL
- Node

#### Instructions
After clone the repository, open terminal and run the following commands:
```bash
cd laravel-games-crud
composer install
npm install && npm run build
cp .env.example .env
php artisan key:generate
```
Create database. For example in MySQL with root user:
```bash
mysql -u root
CREATE DATABASE laravel_games_crud;
exit;
```
If you use want other database configurations, be sure to configure your `.env` file correctly.

Migrate tables and seed some fake data:
```bash
php artisan migrate --seed
```

Also, you can configure a virtual host in your machine instead use laravel serve application.

A test user will be created with the following credentials:
* User: test@example.com
* Password: password

## License

Copyright © 2022

Licensed under [MIT license](LICENSE.md).
