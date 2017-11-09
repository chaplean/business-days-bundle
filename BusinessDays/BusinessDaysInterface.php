<?php

namespace Chaplean\Bundle\BusinessDaysBundle\BusinessDays;

/**
 * Class BusinessDaysInterface.
 *
 * @package   Chaplean\Bundle\BusinessDaysBundle\BusinessDays
 * @author    Valentin - Chaplean <valentin@chaplean.coop>
 * @copyright 2014 - 2017 Chaplean (http://www.chaplean.coop)
 * @since     X.Y.Z
 */
interface BusinessDaysInterface
{
    /**
     * @return array
     */
    public function getWorkingDays();

    /**
     * @return array
     */
    public function getHolidays();

    /**
     * @return string
     */
    public function getTimezone();
}
