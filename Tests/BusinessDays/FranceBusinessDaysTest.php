<?php

namespace Tests\Chaplean\Bundle\BusinessDaysBundle\BusinessDays;

use Business\Day;
use Chaplean\Bundle\BusinessDaysBundle\BusinessDays\FranceBusinessDays;
use PHPUnit\Framework\TestCase;

/**
 * Class FranceBusinessDaysTest.
 *
 * @package   Tests\Chaplean\Bundle\BusinessDaysBundle\BusinessDays
 * @author    Valentin - Chaplean <valentin@chaplean.coop>
 * @copyright 2014 - 2017 Chaplean (http://www.chaplean.coop)
 * @since     X.Y.Z
 */
class FranceBusinessDaysTest extends TestCase
{
    /**
     * @var FranceBusinessDays
     */
    private $franceBusinessDays;

    /**
     * @return void
     */
    protected function setUp()
    {
        parent::setUp();

        $this->franceBusinessDays = new FranceBusinessDays();
    }

    /**
     * @covers \Chaplean\Bundle\BusinessDaysBundle\BusinessDays\FranceBusinessDays::getTimezone()
     *
     * @return void
     */
    public function testGetTimezone()
    {
        $this->assertEquals(new \DateTimeZone('Europe/Paris'), $this->franceBusinessDays->getTimezone());
    }

    /**
     * @covers \Chaplean\Bundle\BusinessDaysBundle\BusinessDays\FranceBusinessDays::getWorkingDays()
     *
     * @return void
     */
    public function testGetWorkingDays()
    {
        /** @var \Business\Day[] $workingDays */
        $workingDays = $this->franceBusinessDays->getWorkingDays();

        $this->assertCount(5, $workingDays);
        $this->assertInstanceOf(Day::class, $workingDays[0]);
    }

    /**
     * @covers \Chaplean\Bundle\BusinessDaysBundle\BusinessDays\FranceBusinessDays::getHolidays()
     *
     * @return void
     */
    public function testGetHolidays()
    {
        $holidays = $this->franceBusinessDays->getHolidays();

        $this->assertCount(11, $holidays);
    }
}
