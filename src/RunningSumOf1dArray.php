<?php

namespace App;

/**
 * Running Sum of 1d Array
 *
 * Given an array nums. We define a running sum of an array as runningSum[i] = sum(nums[0]…nums[i]).
 * Return the running sum of nums.
 *
 * Example 1:
 * Input: nums = [1,2,3,4]
 * Output: [1,3,6,10]
 * Explanation: Running sum is obtained as follows: [1, 1+2, 1+2+3, 1+2+3+4].
 *
 * Example 2:
 * Input: nums = [1,1,1,1,1]
 * Output: [1,2,3,4,5]
 * Explanation: Running sum is obtained as follows: [1, 1+1, 1+1+1, 1+1+1+1, 1+1+1+1+1].
 *
 * Example 3:
 * Input: nums = [3,1,2,10,1]
 * Output: [3,4,6,16,17]
 *
 * https://leetcode.com/problems/running-sum-of-1d-array
 */
class RunningSumOf1dArray
{
    /**
     * @param int[] $nums
     * @return int[]
     */
    public function runningSum(array $nums): array
    {
        $runningSum = [];
        $sum = 0;
        foreach ($nums as $num) {
            $sum += $num;
            $runningSum[] = $sum;
        }
        return $runningSum;
    }
}
