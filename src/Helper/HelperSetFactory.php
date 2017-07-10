<?php

/**
 * Aist Console (http://mateuszsitek.com/projects/console)
 *
 * @copyright Copyright (c) 2017 DIGITAL WOLVES LTD (http://digitalwolves.ltd) All rights reserved.
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 */

namespace Aist\Console\Helper;

use Interop\Container\ContainerInterface;
use Symfony\Component\Console\Helper\HelperSet;

/**
 * Factory for HelperSet
 */
class HelperSetFactory
{
    /**
     * @param ContainerInterface $container
     *
     * @return HelperSet
     */
    public function __invoke(ContainerInterface $container)
    {
        $config = $container->get('config');

        $helpers = [];
        foreach ($config['console']['helpers'] as $name => $helper) {
            $helpers[$name] = $container->get($helper);
        }

        return new HelperSet($helpers);
    }
}
