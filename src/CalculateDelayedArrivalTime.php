<?php

namespace App;

/**
 * Calculate Delayed Arrival Time
 *
 * You are given a positive integer arrivalTime denoting the arrival time of a train in hours, and another positive
 * integer delayedTime denoting the amount of delay in hours. Return the time when the train will arrive at the station.
 * Note that the time in this problem is in 24-hours format.
 *
 * Example 1:
 * Input: arrivalTime = 15, delayedTime = 5
 * Output: 20
 * Explanation: Arrival time of the train was 15:00 hours. It is delayed by 5 hours. Now it will reach at 15+5 = 20
 *
 * Example 2:
 * Input: arrivalTime = 13, delayedTime = 11
 * Output: 0
 * Explanation: Arrival time of the train was 13:00 hours. It is delayed by 11 hours. Now it will reach at 13+11=24
 * (Which is denoted by 00:00 in 24 hours format so return 0).
 *
 * https://leetcode.com/problems/calculate-delayed-arrival-time
 */
class CalculateDelayedArrivalTime
{
    /**
     * @param int $arrivalTime
     * @param int $delayedTime
     * @return int
     */
    public function findDelayedArrivalTime(int $arrivalTime, int $delayedTime): int
    {
        $delayedArrivalTime = $arrivalTime + $delayedTime;
        if ($delayedArrivalTime >= 24) {
            return $delayedArrivalTime - 24;
        }
        return $delayedArrivalTime;
    }
}
