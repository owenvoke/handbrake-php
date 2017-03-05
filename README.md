# handbrake-php

A PHP integration with the Handbrake CLI.

## Installation

The fastest way to install is via [Composer](https://getcomposer.org) using the following command:
`composer require pxgamer/handbrake-php`

Alternatively, the 3 files in the `src/` folder can be included manually.

## Example code

```php
<?php

include 'vendor/autoload.php';

use pxgamer\Handbrake as HB;

$Config = new HB\Config;

// Set Type40 Defaults
$Config->__set('input', 'C:/Users/PXgamer/Downloads/TEST.avi');
$Config->__set('output', 'C:/Users/PXgamer/Downloads/');
$Config->__set('audioLanguage', 'English');
$Config->__set('bitRate', '384k');
$Config->__set('mixdown', '6ch');
$Config->__set('videoRate', '23.976');
$Config->__set('audioRate', '48');
$Config->__set('encodingSceme', 'x264');
$Config->__set('quality', '25');
$Config->__set('frameRateType', 'cfr');
$Config->__set('additionalData',
    'level=4.1:cabac=1:ref=5:analyse=0x133:me=umh:subme=9:chroma-me=1:deadzone-inter=21:deadzone-intra=11:b-adapt=2:rc-lookahead=60:vbv-maxrate=10000:vbv-bufsize=10000:qpmax=69:bframes=4:b-adapt=2:direct=auto:crf-max=51:weightp=2:merange=24:chroma-qp-offset=-1:sync-lookahead=2:psy-rd=1.00,0.15:trellis=2:min-keyint=23:partitions=all');

$Configuration = $Config->getConfig();
$HB = new HB\Handbrake($Configuration);
echo $HB->run();
```