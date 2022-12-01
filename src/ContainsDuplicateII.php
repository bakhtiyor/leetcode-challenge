<?php

namespace App;

/**
 * Contains Duplicate II
 *
 * Given an integer array nums and an integer k, return true if there are two distinct indices i and j in the array such
 * that nums[i] == nums[j] and abs(i - j) <= k.
 *
 * Example 1:
 * Input: nums = [1,2,3,1], k = 3       Output: true
 *
 * Example 2:
 * Input: nums = [1,0,1,1], k = 1       Output: true
 *
 * Example 3:
 * Input: nums = [1,2,3,1,2,3], k = 2   Output: false
 *
 * https://leetcode.com/problems/contains-duplicate-ii
 */
class ContainsDuplicateII
{
    /**
     * @param array<array-key, int> $nums
     * @param int $k
     * @return bool
     */
    public function containsNearbyDuplicate(array $nums, int $k): bool
    {
        $numsHash = [];
        for ($i = 0, $iMax = count($nums); $i < $iMax; $i++) {
            if (array_key_exists($nums[$i], $numsHash)) {
                if ($i - $numsHash[$nums[$i]] <= $k) {
                    return true;
                } else {
                    $numsHash[$nums[$i]] = $i;
                }
            } else {
                $numsHash[$nums[$i]] = $i;
            }
        }
        return false;
    }
}
