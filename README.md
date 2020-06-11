# Laravel trailing slash

[![Latest Version on Packagist](https://img.shields.io/packagist/v/gnahotelsolutions/laravel-trailing-slash.svg?style=flat-square)](https://packagist.org/packages/gnahotelsolutions/laravel-trailing-slash)
[![Build Status](https://img.shields.io/travis/gnahotelsolutions/laravel-trailing-slash/master.svg?style=flat-square)](https://travis-ci.org/gnahotelsolutions/laravel-trailing-slash)
[![Quality Score](https://img.shields.io/scrutinizer/g/gnahotelsolutions/laravel-trailing-slash.svg?style=flat-square)](https://scrutinizer-ci.com/g/gnahotelsolutions/laravel-trailing-slash)
[![Total Downloads](https://img.shields.io/packagist/dt/gnahotelsolutions/laravel-trailing-slash.svg?style=flat-square)](https://packagist.org/packages/gnahotelsolutions/laravel-trailing-slash)

With this package you will be able to end your Laravel project routes with trailing slash.

## Installation

You can install the package via composer:

```bash
composer require gnahotelsolutions/laravel-trailing-slash
```

## Usage

Optionally, you can publish the config file of the package.

```bash
php artisan vendor:publish --provider="GNAHotelSolutions\LaravelTrailingSlash\LaravelTrailingSlashServiceProvider" --tag=config
```

If you want to disable the behaviour of this package, use this variable in your `.env` file.

```
TRAILING_SLASH=false
```

If you want to disable the behaviour of this package just in certain areas of your application, you can modify the configuration on runtime.

```php
config()->set('laravel-trailing-slash.active', false);
```

If you are using Apache on your development or production environment, remember to remove or comment this lines in `public/.htaccess`

```
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_URI} (.+)/$
RewriteRule ^ %1 [L,R=301]
```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email dtorralbo@gnahs.com instead of using the issue tracker.

## Credits

- [David Torralbo](https://github.com/torralbodavid)
- [David Llop](https://github.com/lloople)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
