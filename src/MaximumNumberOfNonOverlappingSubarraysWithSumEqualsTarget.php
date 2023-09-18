<?php

namespace App;

/**
 * Maximum Number of Non-Overlapping Subarrays With Sum Equals Target
 *
 * Given an array nums and an integer target, return the maximum number of non-empty non-overlapping subarrays such that
 * the sum of values in each subarray is equal to target.
 *
 * Example 1:
 * Input: nums = [1,1,1,1,1], target = 2
 * Output: 2
 * Explanation: There are 2 non-overlapping subarrays [1,1,1,1,1] with sum equals to target(2).
 *
 * Example 2:
 * Input: nums = [-1,3,5,1,4,2,-9], target = 6
 * Output: 2
 * Explanation: There are 3 subarrays with sum equal to 6.
 * ([5,1], [4,2], [3,5,1,4,2,-9]) but only the first 2 are non-overlapping.
 *
 * https://leetcode.com/problems/maximum-number-of-non-overlapping-subarrays-with-sum-equals-target
 */
class MaximumNumberOfNonOverlappingSubarraysWithSumEqualsTarget
{
    /**
     * @param int[] $nums
     * @param int $target
     * @return int
     */
    public function maxNonOverlapping(array $nums, int $target): int
    {
        $count = 0;
        $sum = 0;
        $map = [0 => 0];
        foreach ($nums as $num) {
            $sum += $num;
            if (isset($map[$sum - $target])) {
                $count++;
                $sum = 0;
                $map = [0 => 0];
            } else {
                $map[$sum] = 1;
            }
        }
        return $count;
    }
}
