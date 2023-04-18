# A Laravel package that provides middleware for request auditing, enabling users to log incoming requests, perform security analysis, and gather statistics on request traffic.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/illegal/request-audit.svg?style=flat-square)](https://packagist.org/packages/illegal/request-audit)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/illegal/request-audit/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/illegal/request-audit/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/illegal/request-audit/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/illegal/request-audit/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/illegal/request-audit.svg?style=flat-square)](https://packagist.org/packages/illegal/request-audit)



A Laravel package that provides middleware for request auditing, enabling users to log incoming requests, perform
security analysis, and gather statistics on request traffic.

**This package is under active development and is <u>not yet ready</u> for production use.**

## Installation

You can install the package via composer:

```bash
composer require illegal/request-audit
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="request-audit-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="request-audit-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="request-audit-views"
```

## Usage


## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Mircha Emanuel D'Angelo](https://github.com/mirchaemanuel)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
