<?php

/**
 * Aist Console (http://mateuszsitek.com/projects/console)
 *
 * @copyright Copyright (c) 2017 DIGITAL WOLVES LTD (http://digitalwolves.ltd) All rights reserved.
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 */

namespace Test\Aist\Console\Helper;

use Aist\Console\Helper\HelperSetFactory;
use Interop\Container\ContainerInterface;
use PHPUnit\Framework\TestCase;
use Prophecy\Prophecy\ProphecyInterface;
use Symfony\Component\Console\Helper\HelperSet;

class HelperSetFactoryTest extends TestCase
{
    /**
     * @var ContainerInterface|ProphecyInterface
     */
    private $container;

    public function setUp()
    {
        $this->container = $this->prophesize(ContainerInterface::class);
    }

    public function testCallingFactoryReturnsLoggerHelperInstance()
    {
        $config = [
            'console' => [
                'helpers' => [

                ],
            ],
        ];
        $this->container->get('config')->willReturn($config);

        $factory = new HelperSetFactory();
        $this->assertInstanceOf(HelperSetFactory::class, $factory);

        $class = $factory($this->container->reveal());

        $this->assertInstanceOf(HelperSet::class, $class);
    }
}
