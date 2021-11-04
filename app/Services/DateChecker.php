<?php

namespace App\Services;

class DateChecker
{
    /**
     * @param string $strDate
     * @param string $strFormat
     * @param bool $strTimezone
     * @return bool
     */
    public function isValid(string $strDate, string $strFormat = "d/m/Y", bool $strTimezone = false): bool
    {
        $date = \DateTime::createFromFormat($strFormat, $strDate);

        if ($date && $date->format("Y") < 1970) {
            return false;
        }
        return ($date &&
            \DateTime::getLastErrors()["warning_count"] === 0 &&
            \DateTime::getLastErrors()["error_count"] === 0);
    }
}
