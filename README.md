# QuickUSSD

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]


Laravel 10 package for quick USSD prototyping and development
## Install

Via Composer

``` bash
$ composer require johnnywoode/quickussd

##Migrate the tables
$ php artisan migrate --path=vendor/johnnywoode/quickussd/src/Http/migrations

##Add service provider
  "johnnywoode\quickussd\QuickUssdServiceProvider::class"
##migrate
$ php artisan migrate

##Seed only if you need sample app
$ php artisan db:seed
```

## Usage


## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email leo@devs.mobi instead of using the issue tracker.

## Credits

- [johnnywoode][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
