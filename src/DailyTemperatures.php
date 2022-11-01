<?php

namespace App;

/**
 * Daily Temperatures
 *
 * Given an array of integers temperatures represents the daily temperatures, return an array answer such
 * that answer[i] is the number of days you have to wait after the i-th day to get a warmer temperature. If there is no
 * future day for which this is possible, keep answer[i] = 0 instead.
 *
 * Example 1:
 * Input: temperatures = [73,74,75,71,69,72,76,73]
 * Output: [1,1,4,2,1,1,0,0]
 *
 * Example 2:
 * Input: temperatures = [30,40,50,60]
 * Output: [1,1,1,0]
 *
 * Example 3:
 * Input: temperatures = [30,60,90]
 * Output: [1,1,0]
 *
 * https://leetcode.com/problems/daily-temperatures
 */
class DailyTemperatures
{
    /**
     * @param array<array-key, int> $temperatures
     * @return array<array-key, int>
     */
    public function dailyTemperatures(array $temperatures): array
    {
        $temperaturesCount = count($temperatures);
        $answers = array_fill(0, $temperaturesCount, 0);
        $stack = [];
        for ($i = 0; $i < $temperaturesCount; $i++) {
            while (count($stack) > 0 && $temperatures[$i] > $temperatures[$stack[count($stack) - 1]]) {
                $answers[$stack[count($stack) - 1]] = $i - $stack[count($stack) - 1];
                array_pop($stack);
            }
            $stack[] = $i;
        }
        return $answers;
    }
}
