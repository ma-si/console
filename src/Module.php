<?php

/**
 * Aist Console (http://mateuszsitek.com/projects/console)
 *
 * @copyright Copyright (c) 2017 DIGITAL WOLVES LTD (http://digitalwolves.ltd) All rights reserved.
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 */

namespace Aist\Console;

class Module
{
    /**
     * {@inheritDoc}
     */
    public function getConfig()
    {
        $provider = new ConfigProvider();

        return [
            'service_manager' => $provider->getDependencies(),
        ];
    }
}
