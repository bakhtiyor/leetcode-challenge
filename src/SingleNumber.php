<?php

namespace App;

/**
 * Single Number
 *
 * Given a non-empty array of integers nums, every element appears twice except for one. Find that single one.
 * You must implement a solution with a linear runtime complexity and use only constant extra space.
 * Example 1:
 * Input: nums = [2,2,1]
 * Output: 1
 *
 * Example 2:
 * Input: nums = [4,1,2,1,2]
 * Output: 4
 *
 * https://leetcode.com/problems/single-number
 */
class SingleNumber
{
    /**
     * @param array<array-key, int> $nums
     * @return int
     */
    public function singleNumber(array $nums): int
    {
        $freq = [];
        foreach ($nums as $num) {
            if (isset($freq[$num])) {
                ++$freq[$num];
            } else {
                $freq[$num] = 1;
            }
        }
        foreach ($freq as $key => $value) {
            if ($value === 1) {
                return $key;
            }
        }
        return 0;
    }
}
