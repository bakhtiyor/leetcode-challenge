<?php

namespace App;

/**
 * Find First and Last Position of Element in Sorted Array
 *
 * Given an array of integers nums sorted in non-decreasing order, find the starting and ending position of a given
 * target value. If target is not found in the array, return [-1, -1]. You must write an algorithm with O(log n) runtime
 * complexity.
 *
 * Example 1:
 * Input: nums = [5,7,7,8,8,10], target = 8
 * Output: [3,4]
 *
 * Example 2:
 * Input: nums = [5,7,7,8,8,10], target = 6
 * Output: [-1,-1]
 *
 * Example 3:
 * Input: nums = [], target = 0
 * Output: [-1,-1]
 *
 * https://leetcode.com/problems/find-first-and-last-position-of-element-in-sorted-array
 */
class FindFirstAndLastPositionOfElementInSortedArray
{
    /**
     * @param int[] $nums
     * @param int $target
     * @return int[]
     */
    public function searchRange(array $nums, int $target): array
    {
        if (count($nums) === 1 && $target === $nums[0]) {
            return [0, 0];
        }
        $first = $last = -1;
        $left = 0;
        $right = count($nums) - 1;
        while (($left <= $right) && ($first === -1 || $last === -1)) {
            if ($nums[$left] === $target) {
                $first = $left;
            }
            if ($nums[$right] === $target) {
                $last = $right;
            }
            if ($first === -1) {
                $left++;
            }
            if ($last === -1) {
                $right--;
            }
        }

        return [$first, $last];
    }
}
