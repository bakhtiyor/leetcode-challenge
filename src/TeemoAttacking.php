<?php

namespace App;

/**
 * Teemo Attacking
 *
 * Our hero Teemo is attacking an enemy Ashe with poison attacks! When Teemo attacks Ashe, Ashe gets poisoned for
 * exactly duration seconds. More formally, an attack at second t will mean Ashe is poisoned during the inclusive time
 * interval [t, t + duration - 1]. If Teemo attacks again before the poison effect ends, the timer for it is reset, and
 * the poison effect will end duration seconds after the new attack.
 * You are given a non-decreasing integer array timeSeries, where timeSeries[i] denotes that Teemo attacks Ashe at
 * second timeSeries[i], and an integer duration. Return the total number of seconds that Ashe is poisoned.
 *
 * Example 1:
 * Input: timeSeries = [1,4], duration = 2
 * Output: 4
 * Explanation: Teemo's attacks on Ashe go as follows:
 * - At second 1, Teemo attacks, and Ashe is poisoned for seconds 1 and 2.
 * - At second 4, Teemo attacks, and Ashe is poisoned for seconds 4 and 5.
 * Ashe is poisoned for seconds 1, 2, 4, and 5, which is 4 seconds in total.
 *
 * Example 2:
 * Input: timeSeries = [1,2], duration = 2
 * Output: 3
 * Explanation: Teemo's attacks on Ashe go as follows:
 * - At second 1, Teemo attacks, and Ashe is poisoned for seconds 1 and 2.
 * - At second 2 however, Teemo attacks again and resets the poison timer. Ashe is poisoned for seconds 2 and 3.
 * Ashe is poisoned for seconds 1, 2, and 3, which is 3 seconds in total.
 *
 * https://leetcode.com/problems/teemo-attacking
 */
class TeemoAttacking
{
    /**
     * @param array<array-key, int> $timeSeries
     * @param int $duration
     * @return int
     */
    public function findPoisonedDuration(array $timeSeries, int $duration): int
    {
        $sum = $duration;
        for ($i = 0, $iMax = count($timeSeries) - 1; $i < $iMax; $i++) {
            $sum += min($duration, $timeSeries[$i + 1] - $timeSeries[$i]);
        }
        return $sum;
    }
}
