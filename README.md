# campaign

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Total Downloads][ico-downloads]][link-downloads]

This package is built to help create more advanced scheduled email campaigns. I want to make my first pass be purely code based, but then I would like to explore a more GUI based extension.

## Structure

If any of the following are applicable to your project, then the directory structure should follow industry best practises by being named the following.

## Install

Via Composer

``` bash
$ composer require fuzzybaird/campaign
```

## Usage

``` php
$skeleton = new Fuzzybaird\Campaign();
echo $skeleton->echoPhrase('Hello, League!');
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email elibaird1@gmail.com instead of using the issue tracker.

## Credits

- [Eli Baird][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/fuzzybaird/campaign.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/fuzzybaird/campaign/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/fuzzybaird/campaign.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/fuzzybaird/campaign.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/fuzzybaird/campaign.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/fuzzybaird/campaign
[link-travis]: https://travis-ci.org/fuzzybaird/campaign
[link-scrutinizer]: https://scrutinizer-ci.com/g/fuzzybaird/campaign/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/fuzzybaird/campaign
[link-downloads]: https://packagist.org/packages/fuzzybaird/campaign
[link-author]: https://github.com/fuzzybaird
[link-contributors]: ../../contributors
