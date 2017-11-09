<?php

namespace Tests\Chaplean\Bundle\BusinessDaysBundle\DependencyInjection;

use Chaplean\Bundle\BusinessDaysBundle\DependencyInjection\ChapleanBusinessDaysExtension;
use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * Class ChapleanBusinessDaysExtensionTest.
 *
 * @package   Tests\Chaplean\Bundle\BusinessDaysBundle\DependencyInjection
 * @author    Valentin - Chaplean <valentin@chaplean.coop>
 * @copyright 2014 - 2017 Chaplean (http://www.chaplean.coop)
 * @since     1.0.0
 */
class ChapleanBusinessDaysExtensionTest extends TestCase
{
    /**
     * @covers \Chaplean\Bundle\BusinessDaysBundle\DependencyInjection\ChapleanBusinessDaysExtension::load()
     *
     * @return void
     */
    public function testConfigIsLoadedInParameters()
    {
        $container = new ContainerBuilder();
        $loader = new ChapleanBusinessDaysExtension();
        $loader->load([], $container);

        $this->assertTrue($container->has('chaplean.business_days'));
    }
}
