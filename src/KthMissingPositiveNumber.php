<?php

namespace App;

/**
 * Kth Missing Positive Number
 *
 * Given an array arr of positive integers sorted in a strictly increasing order, and an integer k. Return the kth
 * positive integer that is missing from this array.
 *
 * Example 1:
 * Input: arr = [2,3,4,7,11], k = 5
 * Output: 9
 * Explanation: The missing positive integers are [1,5,6,8,9,10,12,13,...]. The 5th missing positive integer is 9.
 *
 * Example 2:
 * Input: arr = [1,2,3,4], k = 2
 * Output: 6
 * Explanation: The missing positive integers are [5,6,7,...]. The 2nd missing positive integer is 6.
 *
 * https://leetcode.com/problems/kth-missing-positive-number
 */
class KthMissingPositiveNumber
{
    /**
     * @param int[] $arr
     * @param int $k
     * @return int
     */
    public function findKthPositive(array $arr, int $k): int
    {
        $missing = 0;
        $last = 0;
        foreach ($arr as $num) {
            $missing += $num - $last - 1;
            if ($missing >= $k) {
                return $num - ($missing - $k) - 1;
            }
            $last = $num;
        }

        return $last + $k - $missing;
    }
}
