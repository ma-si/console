<?php

/**
 * Aist Console (http://mateuszsitek.com/projects/console)
 *
 * @copyright Copyright (c) 2017 DIGITAL WOLVES LTD (http://digitalwolves.ltd) All rights reserved.
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 */

namespace Aist\Console\Helper\Logger;

use Psr\Log\LoggerInterface;
use Symfony\Component\Console\Helper\Helper;

/**
 * {@inheritDoc}
 */
class LoggerHelper extends Helper
{
    const NAME = 'logger';

    /**
     * @var LoggerInterface
     */
    protected $logger;

    /**
     * LoggerHelper constructor.
     *
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * @param $method
     * @param $args
     */
    public function __call($method, $args)
    {
        call_user_func_array([$this->logger, $method], $args);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return self::NAME;
    }
}
