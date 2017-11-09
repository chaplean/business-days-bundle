<?php

namespace Tests\Chaplean\Bundle\BusinessDaysBundle\Exception;

use Chaplean\Bundle\BusinessDaysBundle\Exception\UnsupportedLocaleException;
use PHPUnit\Framework\TestCase;

/**
 * Class UnsupportedLocaleExceptionTest.
 *
 * @package   Tests\Chaplean\Bundle\BusinessDaysBundle\Exception
 * @author    Valentin - Chaplean <valentin@chaplean.coop>
 * @copyright 2014 - 2017 Chaplean (http://www.chaplean.coop)
 * @since     1.0.0
 */
class UnsupportedLocaleExceptionTest extends TestCase
{
    /**
     * @covers \Chaplean\Bundle\BusinessDaysBundle\Exception\UnsupportedLocaleException::__construct
     *
     * @return void
     */
    public function testConstruct()
    {
        $unsupportedLocaleException = new UnsupportedLocaleException('fr');

        $this->assertEquals('Unsupported "fr" locale.', $unsupportedLocaleException->getMessage());
    }
}
