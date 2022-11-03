<?php

namespace App;

/**
 * Binary Search
 *
 * Given an array of integers nums which is sorted in ascending order, and an integer target, write a function to
 * search target in nums. If target exists, then return its index. Otherwise, return -1. You must write an algorithm
 * with O(log n) runtime complexity.
 *
 * Example 1:
 * Input: nums = [-1,0,3,5,9,12], target = 9
 * Output: 4
 * Explanation: 9 exists in nums and its index is 4
 *
 * Example 2:
 * Input: nums = [-1,0,3,5,9,12], target = 2
 * Output: -1
 * Explanation: 2 does not exist in nums so return -1
 *
 * https://leetcode.com/problems/binary-search
 */
class BinarySearch
{
    /**
     * @param array<array-key, int> $nums
     * @param int $target
     * @return int
     */
    public function search(array $nums, int $target): int
    {
        $low = 0;
        $high = count($nums) - 1;
        return $this->binarySearch($nums, $target, $low, $high);
    }

    /**
     * @param array<array-key, int> $nums
     * @param int $target
     * @param int $low
     * @param int $high
     * @return int
     */
    private function binarySearch(array $nums, int $target, int $low, int $high): int
    {
        if ($low > $high) {
            return -1;
        }
        $middle = (int) round(($low + $high) / 2);
        if ($nums[$middle] === $target) {
            return $middle;
        }
        if ($nums[$middle] > $target) {
            return $this->binarySearch($nums, $target, $low, $middle - 1);
        } else {
            return $this->binarySearch($nums, $target, $middle + 1, $high);
        }
    }
}
