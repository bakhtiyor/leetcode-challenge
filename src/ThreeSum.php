<?php

namespace App;

/**
 * 3Sum
 *
 * Given an integer array nums, return all the triplets [nums[i], nums[j], nums[k]] such that i != j, i != k, and
 * j != k, and nums[i] + nums[j] + nums[k] == 0. Notice that the solution set must not contain duplicate triplets.
 *
 * Example 1:
 * Input: nums = [-1,0,1,2,-1,-4]           Output: [[-1,-1,2],[-1,0,1]]
 * Explanation:
 * nums[0] + nums[1] + nums[2] = (-1) + 0 + 1 = 0.
 * nums[1] + nums[2] + nums[4] = 0 + 1 + (-1) = 0.
 * nums[0] + nums[3] + nums[4] = (-1) + 2 + (-1) = 0.
 * The distinct triplets are [-1,0,1] and [-1,-1,2].
 * Notice that the order of the output and the order of the triplets does not matter.
 *
 * Example 2:
 * Input: nums = [0,1,1]                    Output: []
 * Explanation: The only possible triplet does not sum up to 0.
 *
 * https://leetcode.com/problems/3sum
 */
class ThreeSum
{
    /**
     * @param array<array-key, int> $nums
     * @return array<array-key, array<array-key, int>>
     */
    public function threeSum(array $nums): array
    {
        $triplets = [];
        sort($nums);
        $count = count($nums);
        foreach ($nums as $index => $value) {
            if ($index > 0 && $value === $nums[$index - 1]) {
                continue;
            }
            $left = $index + 1;
            $right = $count - 1;
            while ($left < $right) {
                $threeSum = $value + $nums[$left] + $nums[$right];
                if ($threeSum > 0) {
                    $right--;
                } elseif ($threeSum < 0) {
                    $left++;
                } else {
                    $triplets[] = [$value, $nums[$left], $nums[$right]];
                    $left++;
                    while ($nums[$left] === $nums[$left - 1] && $left < $right) {
                        $left++;
                    }
                }
            }
        }
        return $triplets;
    }
}
