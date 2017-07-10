<?php

/**
 * Aist Console (http://mateuszsitek.com/projects/console)
 *
 * @copyright Copyright (c) 2017 DIGITAL WOLVES LTD (http://digitalwolves.ltd) All rights reserved.
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 */

namespace Test\Aist\Console\Helper\Logger;

use Aist\Console\Helper\Logger\LoggerHelper;
use Aist\Console\Helper\Logger\LoggerHelperFactory;
use Interop\Container\ContainerInterface;
use PHPUnit\Framework\TestCase;
use Prophecy\Prophecy\ProphecyInterface;
use Psr\Log\LoggerInterface;

class LoggerHelperFactoryTest extends TestCase
{
    /**
     * @var ContainerInterface|ProphecyInterface
     */
    private $container;

    public function setUp()
    {
        $this->container = $this->prophesize(ContainerInterface::class);

        $logger = $this->prophesize(LoggerInterface::class);
        $this->container->get(LoggerInterface::class)->willReturn($logger);
    }

    public function testCallingFactoryReturnsLoggerHelperInstance()
    {
        $factory = new LoggerHelperFactory();
        $this->assertInstanceOf(LoggerHelperFactory::class, $factory);

        $class = $factory($this->container->reveal());

        $this->assertInstanceOf(LoggerHelper::class, $class);
    }
}
