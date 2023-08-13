<?php

namespace App;

/**
 * Maximum Ascending Subarray Sum
 *
 * Given an array of positive integers nums, return the maximum possible sum of an ascending subarray in nums.
 * A subarray is defined as a contiguous sequence of numbers in an array.
 * A subarray [nums_l, nums_l+1, ..., nums_r-1, nums_r] is ascending if for all i where l <= i < r, nums_i  < nums_i+1.
 * Note that a subarray of size 1 is ascending.
 *
 * Example 1:
 * Input: nums = [10,20,30,5,10,50]
 * Output: 65
 * Explanation: [5,10,50] is the ascending subarray with the maximum sum of 65.
 *
 * Example 2:
 * Input: nums = [10,20,30,40,50]
 * Output: 150
 * Explanation: [10,20,30,40,50] is the ascending subarray with the maximum sum of 150.
 *
 * Example 3:
 * Input: nums = [12,17,15,13,10,11,12]
 * Output: 33
 * Explanation: [10,11,12] is the ascending subarray with the maximum sum of 33.
 *
 * https://leetcode.com/problems/maximum-ascending-subarray-sum
 */
class MaximumAscendingSubarraySum
{
    /**
     * @param int[] $nums
     * @return int
     */
    public function maxAscendingSum(array $nums): int
    {
        $max = $nums[0];
        $sum = $nums[0];
        $count = count($nums);

        for ($i = 1; $i < $count; $i++) {
            if ($nums[$i] > $nums[$i - 1]) {
                $sum += $nums[$i];
            } else {
                $sum = $nums[$i];
            }

            $max = max($max, $sum);
        }

        return $max;
    }
}
