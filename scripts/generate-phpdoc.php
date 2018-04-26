#!/usr/bin/env php
<?php

/**
 * This file will generate a phpdoc for every icon available,
 * so they can be used as static method on the Octicons class.
 */

require __DIR__.'/../vendor/autoload.php';

$octicon = new Octicons\Octicon();

$icons = $octicon->all();

foreach ($icons as $icon) {
    $icon['name'] = str_replace('-', '_', $icon['name']);

    echo " * @method static string {$icon['name']}(array \$options = [])\n";
}
