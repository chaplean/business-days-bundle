<?php

namespace Chaplean\Bundle\BusinessDaysBundle\Factory;

use Business\Business;
use Business\BusinessInterface;
use Chaplean\Bundle\BusinessDaysBundle\BusinessDays\BusinessDaysInterface;
use Chaplean\Bundle\BusinessDaysBundle\Exception\UnsupportedLocaleException;
use Symfony\Component\Intl\Intl;

/**
 * Class BusinessFactory.
 *
 * @package   Chaplean\Bundle\BusinessDaysBundle\Factory
 * @author    Valentin - Chaplean <valentin@chaplean.coop>
 * @copyright 2014 - 2017 Chaplean (http://www.chaplean.coop)
 * @since     1.0.0
 */
class BusinessFactory
{
    /**
     * @param string $locale
     *
     * @return BusinessInterface
     * @throws UnsupportedLocaleException
     */
    public static function createBusiness($locale)
    {
        if ($locale !== 'fr') {
            throw new UnsupportedLocaleException($locale);
        }

        $className = Intl::getRegionBundle()->getCountryName(strtoupper($locale)) . 'BusinessDays';
        $businessDaysClass = '\Chaplean\Bundle\BusinessDaysBundle\BusinessDays\\' . $className;
        /** @var BusinessDaysInterface $businessDays */
        $businessDays = new $businessDaysClass();

        return new Business($businessDays->getWorkingDays(), $businessDays->getHolidays(), $businessDays->getTimezone());
    }
}
