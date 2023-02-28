<?php

namespace App;

/**
 * Day of the Year
 *
 * Given a string date representing a Gregorian calendar date formatted as YYYY-MM-DD, return the day number of the year
 *
 * Example 1:
 * Input: date = "2019-01-09"
 * Output: 9
 * Explanation: Given date is the 9th day of the year in 2019.
 *
 * Example 2:
 * Input: date = "2019-02-10"
 * Output: 41
 *
 * https://leetcode.com/problems/day-of-the-year
 */
class DayOfTheYear
{
    /** @var int[] $daysLength  */
    private array $daysLength = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
    /**
     * @param string $date
     * @return int
     */
    public function dayOfYear(string $date): int
    {
        $dateArr = explode('-', $date);
        if (isset($dateArr[0], $dateArr[1], $dateArr[2])) {
            $day = (int) $dateArr[2];
            $month = ((int) $dateArr[1]) - 1;
            $year = (int) $dateArr[0];
            if (($year % 4 === 0 && $year % 100 !== 0) || ($year % 400 === 0)) {
                $this->daysLength[1] = 29;
            }
            $sumDays = $day;
            for ($i = 0; $i < $month; $i++) {
                $sumDays += $this->daysLength[$i];
            }
            return $sumDays;
        }
        return -1;
    }
}
