#!/usr/bin/env php
<?php

/**
 * This script updates the data.json file from the octicons project,
 * so that new icons can be used automaticly.
 */

$packageName = '@primer/octicons';
$outputDir = __DIR__.'/../resources/';

echo "Checking latest package version...\n";
$packageInfo = file_get_contents("https://registry.npmjs.org/{$packageName}/");
$packageInfo = json_decode($packageInfo, true);

$packageVersion = $packageInfo['dist-tags']['latest'];

echo "Downloading new build... [version={$packageVersion}]\n";
$packageArchive = file_get_contents($packageInfo['versions'][$packageVersion]['dist']['tarball']);

file_put_contents($outputDir.'update.tgz', $packageArchive);

echo "Copying data file from package...\n";
copy("phar://{$outputDir}update.tgz/package/build/data.json", $outputDir.'data.json');

unlink($outputDir.'update.tgz');

echo "Done!\n";
