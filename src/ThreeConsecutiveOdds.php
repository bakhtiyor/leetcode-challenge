<?php

namespace App;

/**
 * Three Consecutive Odds
 *
 * Given an integer array arr, return true if there are three consecutive odd numbers in the array. Otherwise, return
 * false.
 *
 * Example 1:
 * Input: arr = [2,6,4,1]
 * Output: false
 * Explanation: There are no three consecutive odds.
 *
 * Example 2:
 * Input: arr = [1,2,34,3,4,5,7,23,12]
 * Output: true
 * Explanation: [5,7,23] are three consecutive odds.
 *
 * https://leetcode.com/problems/three-consecutive-odds
 */
class ThreeConsecutiveOdds
{
    /**
     * @param int[] $arr
     * @return bool
     */
    public function threeConsecutiveOdds(array $arr): bool
    {
        $count = 0;
        foreach ($arr as $value) {
            if ($value % 2 === 0) {
                $count = 0;
            } else {
                $count++;
                if ($count === 3) {
                    return true;
                }
            }
        }
        return false;
    }
}
