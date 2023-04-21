<?php

namespace App;

/**
 * Day of the Week
 *
 * Given a date, return the corresponding day of the week for that date. The input is given as three integers
 * representing the day, month and year respectively. Return the answer as one of the following values
 * {"Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"}.
 *
 * Example 1:
 * Input: day = 31, month = 8, year = 2019
 * Output: "Saturday"
 *
 * Example 2:
 * Input: day = 18, month = 7, year = 1999
 * Output: "Sunday"
 *
 * Example 3:
 * Input: day = 15, month = 8, year = 1993
 * Output: "Sunday"
 *
 * https://leetcode.com/problems/day-of-the-week
 */
class DayOfTheWeek
{
    /**
     * @param int $day
     * @param int $month
     * @param int $year
     * @return string
     */
    public function dayOfTheWeek(int $day, int $month, int $year): string
    {
        // Calculate the number of leap years before the current year
        $leap_year_num = floor(($year - 1969) / 4);

        // Calculate the days in the previous years
        $days_in_previous_years = ($year - 1971) * 365 + $leap_year_num;

        // Make an array of the days in the previous months (of the current year)
        $days_in_previous_months = [0,0,31,59,90,120,151,181,212,243,273,304,334];

        // Calculate the total days from 1/1/1971 to the current day
        $total_days = $days_in_previous_months[$month] + $days_in_previous_years + $day;

        // If the current year is a leap year and the current month has passed February,
        // add one more day to include the February 29th
        if ($year % 4 === 0 && $year !== 2100 && $month > 2) {
            $total_days++;
        }

        // Prepare the return array
        $res = ["Thursday", "Friday", "Saturday", "Sunday", "Monday", "Tuesday", "Wednesday"];

        return $res[$total_days % 7];
    }
}
