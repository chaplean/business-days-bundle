<?php

namespace Tests\Chaplean\Bundle\BusinessDaysBundle\Factory;

use Business\Business;
use Chaplean\Bundle\BusinessDaysBundle\Factory\BusinessFactory;
use PHPUnit\Framework\TestCase;

/**
 * Class BusinessFactory.
 *
 * @package   Tests\Chaplean\Bundle\BusinessDaysBundle\Factory
 * @author    Valentin - Chaplean <valentin@chaplean.coop>
 * @copyright 2014 - 2017 Chaplean (http://www.chaplean.coop)
 * @since     1.0.0
 */
class BusinessFactoryTest extends TestCase
{
    /**
     * @covers \Chaplean\Bundle\BusinessDaysBundle\Factory\BusinessFactory::createBusiness()
     *
     * @return void
     */
    public function testCreateBusiness()
    {
        $business = BusinessFactory::createBusiness('fr');

        $this->assertInstanceOf(Business::class, $business);
    }

    /**
     * @covers \Chaplean\Bundle\BusinessDaysBundle\Factory\BusinessFactory::createBusiness()
     *
     * @return void
     * @expectedException \Chaplean\Bundle\BusinessDaysBundle\Exception\UnsupportedLocaleException
     * @expectedExceptionMessage Unsupported "en" locale.
     */
    public function testCreateBusinessWithUnsupportedLocale()
    {
        BusinessFactory::createBusiness('en');
    }
}
