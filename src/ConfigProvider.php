<?php

/**
 * Aist Console (http://mateuszsitek.com/projects/console)
 *
 * @copyright Copyright (c) 2017 DIGITAL WOLVES LTD (http://digitalwolves.ltd) All rights reserved.
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 */

namespace Aist\Console;

use Aist\Console\Helper\HelperSetFactory;
use Aist\Console\Helper\Logger\LoggerHelper;
use Aist\Console\Helper\Logger\LoggerHelperFactory;
use Symfony\Component\Console\Helper\HelperSet;

class ConfigProvider
{
    /**
     * Returns the configuration array
     *
     * To add a bit of a structure, each section is defined in a separate
     * method which returns an array with its configuration.
     *
     * @return array
     */
    public function __invoke()
    {
        return [
            'dependencies' => $this->getDependencies(),
            'console' => $this->getConsoleConfig(),
        ];
    }

    /**
     * Returns console configuration
     *
     * @return array
     */
    public function getConsoleConfig()
    {
        return [
            'commands' => [],
            'helpers' => [
                'logger' => LoggerHelper::class,
            ],
        ];
    }

    /**
     * Returns the container dependencies
     *
     * @return array
     */
    public function getDependencies()
    {
        return [
            'factories'  => [
                HelperSet::class => HelperSetFactory::class,
                LoggerHelper::class => LoggerHelperFactory::class,
            ],
        ];
    }
}
