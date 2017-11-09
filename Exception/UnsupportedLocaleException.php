<?php

namespace Chaplean\Bundle\BusinessDaysBundle\Exception;

/**
 * Class UnsupportedLocaleException.
 *
 * @package   Chaplean\Bundle\BusinessDaysBundle\Exception
 * @author    Valentin - Chaplean <valentin@chaplean.coop>
 * @copyright 2014 - 2017 Chaplean (http://www.chaplean.coop)
 * @since     X.Y.Z
 */
class UnsupportedLocaleException extends \Exception
{
    /**
     * UnsupportLocaleException constructor.
     *
     * @param string $locale
     */
    public function __construct($locale)
    {
        parent::__construct(sprintf('Unsupported "%s" locale.', $locale), 0, null);
    }
}
