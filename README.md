# Blog Module

A reusable Blog module for Laravel applications built on [nwidart/laravel-modules](https://github.com/nWidart/laravel-modules).

## Installation

1. Install dependencies in your Laravel application:

```
composer require nwidart/laravel-modules
composer require joshbrw/laravel-module-installer
```

2. Require the module package:

```
composer require faysal0x1/blog-module
```

3. Enable the module and run migrations/seeders as needed:

```
php artisan module:enable Blog
php artisan migrate
php artisan db:seed --class="App\\Modules\\Blog\\Database\\Seeders\\BlogDatabaseSeeder"
```

4. Clear caches:

```
php artisan optimize:clear
```

## Features

- Blog CRUD (posts, categories, tags)
- Comments and likes handling
- Repositories for clean data access

## License

MIT
