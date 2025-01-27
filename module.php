<?php
declare(strict_types=1);

/**
 * See LICENSE.md file for further details.
 */
namespace MagicSunday\Webtrees;

use Composer\Autoload\ClassLoader;

// Register our namespace
$loader = new ClassLoader();
$loader->addPsr4(
    'MagicSunday\\Webtrees\\FanChart\\',
    __DIR__ . '/src'
);
$loader->register();

// Create and return instance of the module
return new FanChart\Module(__DIR__);
