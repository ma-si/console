<?php

/**
 * Aist Console (http://mateuszsitek.com/projects/console)
 *
 * @copyright Copyright (c) 2017 DIGITAL WOLVES LTD (http://digitalwolves.ltd) All rights reserved.
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 */

namespace Aist\Console\Helper\Logger;

use Interop\Container\ContainerInterface;
use Psr\Log\LoggerInterface;

/**
 * Factory for LoggerHelper
 */
class LoggerHelperFactory
{
    /**
     * @param ContainerInterface $container
     *
     * @return LoggerHelper
     */
    public function __invoke(ContainerInterface $container)
    {
        return new LoggerHelper($container->get(LoggerInterface::class));
    }
}
