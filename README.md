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

When installed you are ready to go!

Optionally, you can publish the config file of the package.

```bash
php artisan vendor:publish --provider="GnaHotelSolutions\LaravelTrailingSlash\LaravelTrailingSlashServiceProvider" --tagconfig
```
## Disable Laravel Trailing Slash
Place this variable in your .env

```
TRAILING_SLASH=false
```

## Disable Laravel Trailing Slash integration in tests

```php
config()->set('laravel-trailing-slash.active', false);
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

- [David Torralbo](https://github.com/gnahotelsolutions)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
