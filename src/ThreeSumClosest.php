<?php

namespace App;

/**
 * 3Sum Closest
 *
 * Given an integer array nums of length n and an integer target, find three integers in nums such that the sum is
 * closest to target. Return the sum of the three integers.
 * You may assume that each input would have exactly one solution.
 * Example 1:
 * Input: nums = [-1,2,1,-4], target = 1
 * Output: 2
 * Explanation: The sum that is closest to the target is 2. (-1 + 2 + 1 = 2).
 *
 * Example 2:
 * Input: nums = [0,0,0], target = 1
 * Output: 0
 * Explanation: The sum that is closest to the target is 0. (0 + 0 + 0 = 0).
 *
 * https://leetcode.com/problems/3sum-closest
 */
class ThreeSumClosest
{
    /**
     * @param int[] $nums
     * @param int $target
     * @return int
     */
    public function threeSumClosest(array $nums, int $target): int
    {
        $arrayLength = count($nums);
        sort($nums);
        $diff = PHP_INT_MAX;
        for ($i = 0; $i < $arrayLength; $i++) {
            $left = $i + 1;
            $right = $arrayLength - 1;

            while ($left < $right) {
                $sum = $nums[$i] + $nums[$left] + $nums[$right];

                if (abs($target - $sum) < abs($diff)) {
                    $diff = $target - $sum;
                }

                if ($sum > $target) {
                    $right--;
                } else {
                    $left++;
                }
            }
        }
        return ($target - $diff);
    }
}
