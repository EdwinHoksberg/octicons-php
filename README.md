# Octicons-PHP [![Build Status](https://travis-ci.org/EdwinHoksberg/octicons-php.svg?branch=master)](https://travis-ci.org/EdwinHoksberg/octicons-php) [![Coverage Status](https://coveralls.io/repos/github/EdwinHoksberg/octicons-php/badge.svg?branch=master)](https://coveralls.io/github/EdwinHoksberg/octicons-php?branch=master) [![Packagist](https://img.shields.io/packagist/dt/edwinhoksberg/octicons-php.svg?style=flat)](https://packagist.org/packages/edwinhoksberg/octicons-php)

A simple PHP library for displaying the [Github Octicons](https://octicons.github.com/) font icons in svg format.

## Installation
Installation with composer:
```bash
composer require edwinhoksberg/octicons-php
```

## Usage
```php
<?php

use Octicons\Octicon;
use Octicons\Options;

// The shortcut method:
echo Octicon::gear();

// or with options:
echo Octicon::gear([
    'classes' => ['bla', 'test-con'],
    'ratio' => 8
]);


// The extended method:
$octicon = new Octicon();
$icon = $octicon->icon('gear');

echo 'Icon name: '.$icon->getName();     // gear
echo 'Icon width: '.$icon->getWidth();   // 14
echo 'Icon height: '.$icon->getHeight(); // 16
echo 'Icon ratio: '.$icon->getRatio();   // 1

echo $icon->toSvg();

// and with custom options:
$octicon = new Octicon();
$options = new Options();

// add extra css classes:
$options->addClass('background-color');
$options->addClass(['color-blue', 'extra-class']);

// change the icon size:
$options->setRatio(2);

$icon = $octicon->icon('gear', $options);

echo 'Icon width: '.$icon->getWidth();   // 28
echo 'Icon height: '.$icon->getHeight(); // 32

echo $icon->toSvg();
```

## Twig Extension
A simple twig function is available for those who are using the [Twig templating library](https://github.com/twigphp/Twig).
```
Display an icon: {{ octicon("gear") }}

Display an icon with extra css classes: {{ octicon("gear", 'background-red') }}

Display 24px version of icon (default: 16px) : {{ octicon("gear", '', 24) }}

Display an extra large icon: {{ octicon("gear", '', 16, 2) }}
```

## Tests
Run the unit tests with PHPUnit:
```bash
vendor/bin/phpunit -c phpunit.dist.xml
```

## License
[MIT](LICENSE.md)
