<?php

namespace App;

/**
 * Number of Valid Clock Times
 *
 * You are given a string of length 5 called time, representing the current time on a digital clock in the format
 * "hh:mm". The earliest possible time is "00:00" and the latest possible time is "23:59". In the string time, the
 * digits represented by the ? symbol are unknown, and must be replaced with a digit from 0 to 9. Return an integer
 * answer, the number of valid clock times that can be created by replacing every ? with a digit from 0 to 9.
 *
 * Example 1:
 * Input: time = "?5:00"
 * Output: 2
 * Explanation: We can replace the ? with either a 0 or 1, producing "05:00" or "15:00". Note that we cannot replace it
 * with a 2, since the time "25:00" is invalid. In total, we have two choices.
 *
 * Example 2:
 * Input: time = "0?:0?"
 * Output: 100
 * Explanation: Each ? can be replaced by any digit from 0 to 9, so we have 100 total choices.
 *
 * Example 3:
 * Input: time = "??:??"
 * Output: 1440
 * Explanation: There are 24 possible choices for the hours, and 60 possible choices for the minutes. In total, we have
 * 24 * 60 = 1440 choices.
 *
 * https://leetcode.com/problems/number-of-valid-clock-times
 */
class NumberOfValidClockTimes
{
    /**
     * @param string $time
     * @return integer
     */
    public function countTime(string $time): int
    {
        $hour1 = $hour2 = $min1 = $min2 = -1; // default -1
        // extracting digits
        if (is_numeric($time[0])) {
            $hour1 = (int)($time[0]);
        }
        if (is_numeric($time[1])) {
            $hour2 = (int)($time[1]);
        }
        if (is_numeric($time[3])) {
            $min1 = (int)($time[3]);
        }
        if (is_numeric($time[4])) {
            $min2 = (int)($time[4]);
        }

        $res = 1;

        if ($hour1 === -1 && $hour2 === -1) {
            $res *= 24;
        } elseif ($hour1 === -1) {
            $res *= ($hour2 < 4) ? 3 : 2;
        } elseif ($hour2 === -1) {
            $res *= ($hour1 < 2) ? 10 : 4;
        }

        if ($min1 === -1 && $min2 === -1) {
            $res *= 60;
        } elseif ($min1 === -1) {
            $res *= 6;
        } elseif ($min2 === -1) {
            $res *= 10;
        }
        return $res;
    }
}
