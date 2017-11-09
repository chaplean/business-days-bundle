<?php

namespace Chaplean\Bundle\BusinessDaysBundle\BusinessDays;

use Business\Day;
use Business\Days;
use Yasumi\Holiday;
use Yasumi\Yasumi;

/**
 * Class FranceBusinessDays.
 *
 * @package   Chaplean\Bundle\BusinessDaysBundle\BusinessDays
 * @author    Valentin - Chaplean <valentin@chaplean.coop>
 * @copyright 2014 - 2017 Chaplean (http://www.chaplean.coop)
 * @since     X.Y.Z
 */
class FranceBusinessDays implements BusinessDaysInterface
{
    /**
     * @return array
     */
    public function getWorkingDays()
    {
        return [
            new Day(Days::MONDAY, [['00:00:00', '23:59:59']]),
            new Day(Days::TUESDAY, [['00:00:00', '23:59:59']]),
            new Day(Days::WEDNESDAY, [['00:00:00', '23:59:59']]),
            new Day(Days::THURSDAY, [['00:00:00', '23:59:59']]),
            new Day(Days::FRIDAY, [['00:00:00', '23:59:59']])
        ];
    }

    /**
     * @return Holiday[]
     */
    public function getHolidays()
    {
        return Yasumi::create('France', (int) date('Y'))->getHolidays();
    }

    /**
     * @return \DateTimeZone
     */
    public function getTimezone()
    {
        return new \DateTimeZone('Europe/Paris');
    }
}
