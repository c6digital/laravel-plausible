# Send server-side events from Laravel to Plausible.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/c6digital/laravel-plausible.svg?style=flat-square)](https://packagist.org/packages/c6digital/laravel-plausible)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/c6digital/laravel-plausible/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/c6digital/laravel-plausible/actions/workflows/run-tests.yml?query=branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/c6digital/laravel-plausible/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/c6digital/laravel-plausible/actions/workflows/fix-php-code-style-issues.yml?query=branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/c6digital/laravel-plausible.svg?style=flat-square)](https://packagist.org/packages/c6digital/laravel-plausible)

This package provides a small wrapper for the Plausible "Events" API that makes it easy to send custom server-side events to Plausible.

## Installation

You can install the package via Composer:

```bash
composer require c6digital/laravel-plausible
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-plausible-config"
```

## Usage

Add your Plausible domain to your `.env` file.

```sh
PLAUSIBLE_DOMAIN=
```

> The domain is the name you gave your site when creating it inside of Plausible.

Use the `C6Digital\Plausible\Facades\Plausible` facade to start sending events.

```php
Plausible::event(name: 'my-event-name', props: []);
```

If you prefer to use dependency injection, you can use the `C6Digital\Plausible\Plausible` class and inject it into your controllers, jobs, etc.

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

- [Ryan Chandler](https://github.com/c6digital)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
