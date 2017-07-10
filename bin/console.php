<?php // @codingStandardsIgnoreFile

/**
 * Aist Console (http://mateuszsitek.com/projects/console)
 *
 * @copyright Copyright (c) 2017 DIGITAL WOLVES LTD (http://digitalwolves.ltd)
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 */

namespace Aist\Console;

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Helper\HelperSet;

// Setup/verify autoloading
if (file_exists($a = __DIR__ . '/../../../autoload.php')) {
    require $a;
} elseif (file_exists($a = __DIR__ . '/../vendor/autoload.php')) {
    require $a;
} elseif (file_exists($a = __DIR__ . '/../autoload.php')) {
    require $a;
} else {
    fwrite(STDERR, 'Cannot locate autoloader; please run "composer install"' . PHP_EOL);
    exit(1);
}

if (file_exists($container = __DIR__ . '/../../../../config/container.php')) {
    /** container interop */
    $container = require $container;
    $config = $container->get('config');
} elseif (file_exists($config = __DIR__ . '/../../../../config/config.php')) {
    /** Standalone */
    $config = require $config;
} else {
    /** Minimal configuration */
    $config = (new ConfigProvider())->getConsoleConfig();
}

$name = 'Aist Console';
if(isset($config['console']['name'])) {
    $name .= ' | ' . $config['console']['name'];
}
if(isset($config['console']['version'])) {
    $version = $config['console']['version'];
} else {
    $version = file_get_contents( __DIR__ . '/../version');
}

$application = new Application($name, $version);

foreach ($config['console']['commands'] as $class) {
    $application->add(new $class());
}

$helpers = [];
foreach ($config['console']['helpers'] as $name => $helper) {
    $helpers[$name] = $container->get($helper);
}

$helperSet = new HelperSet($helpers);

$application->setHelperSet($helperSet);

$application->run();
