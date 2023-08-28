<?php

namespace App;

/**
 * Number of Days Between Two Dates
 *
 * Write a program to count the number of days between two dates.
 * The two dates are given as strings, their format is YYYY-MM-DD as shown in the examples.
 *
 * Example 1:
 * Input: date1 = "2019-06-29", date2 = "2019-06-30"
 * Output: 1
 *
 * Example 2:
 * Input: date1 = "2020-01-15", date2 = "2019-12-31"
 * Output: 15
 *
 * https://leetcode.com/problems/number-of-days-between-two-dates
 */
class NumberOfDaysBetweenTwoDates
{
    /**
     * @param string $date1
     * @param string $date2
     * @return int
     */
    public function daysBetweenDates(string $date1, string $date2): int
    {
        // write a code without using DateTime class
        $date1 = explode('-', $date1);
        $date2 = explode('-', $date2);
        $date1 = mktime(0, 0, 0, (int) $date1[1], (int) $date1[2], (int) $date1[0]);
        $date2 = mktime(0, 0, 0, (int) $date2[1], (int) $date2[2], (int) $date2[0]);
        return (int) (abs($date1 - $date2) / 86400);
    }
}
