<?php

namespace App;

/**
 * Greatest Sum Divisible by Three
 *
 * Given an integer array nums, return the maximum possible sum of elements of the array such that it is divisible
 * by three.
 *
 * Example 1:
 * Input: nums = [3,6,5,1,8]
 * Output: 18
 * Explanation: Pick numbers 3, 6, 1 and 8 their sum is 18 (maximum sum divisible by 3).
 *
 * Example 2:
 * Input: nums = [4]
 * Output: 0
 * Explanation: Since 4 is not divisible by 3, do not pick any number.
 *
 * Example 3:
 * Input: nums = [1,2,3,4,4]
 * Output: 12
 * Explanation: Pick numbers 1, 3, 4 and 4 their sum is 12 (maximum sum divisible by 3).
 *
 * https://leetcode.com/problems/greatest-sum-divisible-by-three
 */
class GreatestSumDivisibleByThree
{
    /**
     * @param int[] $nums
     * @return int
     */
    public function maxSumDivThree(array $nums): int
    {
        $sum = 0;
        $one = 10000;
        $two = 10000;
        foreach ($nums as $num) {
            $sum += $num;
            if ($num % 3 === 1) {
                $two = min($two, $one + $num);
                $one = min($one, $num);
            }
            if ($num % 3 === 2) {
                $one = min($one, $two + $num);
                $two = min($two, $num);
            }
        }
        if ($sum % 3 === 0) {
            return $sum;
        }
        if ($sum % 3 === 1) {
            return $sum - $one;
        }
        return $sum - $two;
    }
}
