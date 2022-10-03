<?php

namespace App;

/**
 * Given an array of integers nums and an integer target, return indices of the two numbers such that they add up to
 * target.
 * You may assume that each input would have exactly one solution, and you may not use the same element twice.
 * You can return the answer in any order.
 *
 * Example 1:
 * Input: nums = [2,7,11,15], target = 9
 * Output: [0,1]
 * Explanation: Because nums[0] + nums[1] == 9, we return [0, 1].
 *
 * https://leetcode.com/problems/two-sum/
 */
class TwoSum
{
    /**
     * @param array<array-key, int> $nums
     * @param int $target
     * @return array|null
     */
    public function twoSum(array $nums, int $target): ?array
    {
        foreach ($nums as $index1 => $num1) {
            foreach ($nums as $index2 => $num2) {
                if ($index1 !== $index2 && ($num1 + $num2) === $target) {
                    return [$index1, $index2];
                }
            }
        }
        return null;
    }
}
