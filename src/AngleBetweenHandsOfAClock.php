<?php

namespace App;

/**
 * Angle Between Hands of a Clock
 *
 * Given two numbers, hour and minutes, return the smaller angle (in degrees) formed between the hour and the minute
 * hand. Answers within 10-5 of the actual value will be accepted as correct.
 *
 * Example 1:
 * Input: hour = 12, minutes = 30
 * Output: 165
 *
 * Example 2:
 * Input: hour = 3, minutes = 30
 * Output: 75
 *
 * Example 3:
 * Input: hour = 3, minutes = 15
 * Output: 7.5
 *
 * https://leetcode.com/problems/angle-between-hands-of-a-clock
 */
class AngleBetweenHandsOfAClock
{
    /**
     * @param int $hour
     * @param int $minutes
     * @return float
     */
    public function angleClock(int $hour, int $minutes): float
    {
        $hourAngle = 0.5 * (60 * $hour + $minutes);
        $minuteAngle = 6 * $minutes;
        $angle = abs($hourAngle - $minuteAngle);
        return min($angle, 360 - $angle);
    }
}
