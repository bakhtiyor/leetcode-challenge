<?php

namespace App;

/**
 * Contains Duplicate
 *
 * Given an integer array nums, return true if any value appears at least twice in the array, and return false if every
 * element is distinct.
 *
 * Example 1:
 * Input: nums = [1,2,3,1]          Output: true
 *
 * Example 2:
 * Input: nums = [1,2,3,4]          Output: false
 *
 * https://leetcode.com/problems/contains-duplicate
 */
class ContainsDuplicate
{
    /**
     * @param array<array-key, int> $nums
     * @return bool
     */
    public function containsDuplicate(array $nums): bool
    {
        $hash = [];
        foreach ($nums as $num) {
            if (isset($hash[$num])) {
                return true;
            } else {
                $hash[$num] = 1;
            }
        }
        return false;
    }
}
