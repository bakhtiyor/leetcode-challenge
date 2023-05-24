<?php

namespace App;

/**
 * Sum of Unique Elements
 *
 * You are given an integer array nums. The unique elements of an array are the elements that appear exactly once in the
 * array. Return the sum of all the unique elements of nums.
 *
 * Example 1:
 * Input: nums = [1,2,3,2]
 * Output: 4
 * Explanation: The unique elements are [1,3], and the sum is 4.
 *
 * Example 2:
 * Input: nums = [1,1,1,1,1]
 * Output: 0
 * Explanation: There are no unique elements, and the sum is 0.
 *
 * Example 3:
 * Input: nums = [1,2,3,4,5]
 * Output: 15
 * Explanation: The unique elements are [1,2,3,4,5], and the sum is 15.
 *
 * https://leetcode.com/problems/sum-of-unique-elements
 */
class SumUniqueElements
{
    /**
     * @param int[] $nums
     * @return int
     */
    public function sumOfUnique(array $nums): int
    {
        $unique = [];
        $sum = 0;
        foreach ($nums as $num) {
            if (isset($unique[$num])) {
                $unique[$num]++;
            } else {
                $unique[$num] = 1;
            }
        }
        foreach ($unique as $num => $count) {
            if ($count === 1) {
                $sum += $num;
            }
        }
        return $sum;
    }
}
