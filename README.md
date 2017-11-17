# handbrake-php

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Style CI][ico-styleci]][link-styleci]
[![Code Coverage][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

A PHP integration with the Handbrake CLI.

## Structure

```
src/
tests/
vendor/
```

## Install

Via Composer

``` bash
$ composer require pxgamer/handbrake-php
```

## Usage

```php
<?php

include 'vendor/autoload.php';

use pxgamer\Handbrake as HB;

$Config = new HB\Config;

// Set Type40 Defaults
$Config->input = '/home/user/test.avi';
$Config->output = '/var/www/';
$Config->audioLanguage = 'English';
$Config->bitRate = '384k';
$Config->mixdown = '6ch';
$Config->videoRate = '23.976';
$Config->audioRate = '48';
$Config->encodingSceme = 'x264';
$Config->quality = '25';
$Config->frameRateType = 'cfr';
$Config->additionalData =
    'level=4.1:cabac=1:ref=5:analyse=0x133:me=umh:subme=9:chroma-me=1:deadzone-inter=21:deadzone-intra=11:b-adapt=2:rc-lookahead=60:vbv-maxrate=10000:vbv-bufsize=10000:qpmax=69:bframes=4:b-adapt=2:direct=auto:crf-max=51:weightp=2:merange=24:chroma-qp-offset=-1:sync-lookahead=2:psy-rd=1.00,0.15:trellis=2:min-keyint=23:partitions=all';

$Configuration = $Config->getConfig();
$HB = new HB\Handbrake($Configuration);
echo $HB->run();
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email owzie123@gmail.com instead of using the issue tracker.

## Credits

- [pxgamer][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/pxgamer/handbrake-php.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/pxgamer/handbrake-php/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/83929934/shield
[ico-code-quality]: https://img.shields.io/codecov/c/github/pxgamer/handbrake-php.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/pxgamer/handbrake-php.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/pxgamer/handbrake-php
[link-travis]: https://travis-ci.org/pxgamer/handbrake-php
[link-styleci]: https://styleci.io/repos/83929934
[link-code-quality]: https://codecov.io/gh/pxgamer/handbrake-php
[link-downloads]: https://packagist.org/packages/pxgamer/handbrake-php
[link-author]: https://github.com/pxgamer
[link-contributors]: ../../contributors
