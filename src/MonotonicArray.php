<?php

namespace App;

/**
 * Monotonic Array
 *
 * An array is monotonic if it is either monotone increasing or monotone decreasing. An array nums is monotone
 * increasing if for all i <= j, nums[i] <= nums[j]. An array nums is monotone decreasing if for all i <= j,
 * nums[i] >= nums[j]. Given an integer array nums, return true if the given array is monotonic, or false otherwise.
 *
 * Example 1:
 * Input: nums = [1,2,2,3]          Output: true
 *
 * Example 2:
 * Input: nums = [6,5,4,4]          Output: true
 *
 * Example 3:
 * Input: nums = [1,3,2]            Output: false
 *
 * https://leetcode.com/problems/monotonic-array
 */
class MonotonicArray
{
    /**
     * @param array $nums
     * @return bool
     */
    public function isMonotonic(array $nums): bool
    {
        $isMonotoneIncreasing = true;
        $isMonotoneDecreasing = true;
        for ($i = 0, $iMax = count($nums) - 1; $i < $iMax; $i++) {
            if ($nums[$i] > $nums[$i + 1]) {
                $isMonotoneIncreasing = false;
            }
            if ($nums[$i] < $nums[$i + 1]) {
                $isMonotoneDecreasing = false;
            }
        }
        return $isMonotoneIncreasing || $isMonotoneDecreasing;
    }
}
