<?php

namespace App;

/**
 * Search Insert Position
 *
 * Given a sorted array of distinct integers and a target value, return the index if the target is found. If not,
 * return the index where it would be if it were inserted in order.
 * You must write an algorithm with O(log n) runtime complexity.
 * Example 1:
 * Input: nums = [1,3,5,6], target = 5
 * Output: 2
 *
 * Example 2:
 * Input: nums = [1,3,5,6], target = 2
 * Output: 1
 *
 * https://leetcode.com/problems/search-insert-position/
 */
class SearchInsertPosition
{
    /**
     * @param int[] $nums
     * @param int $target
     * @return int
     */
    public function searchInsert(array $nums, int $target): int
    {
        $left = 0;
        $right = count($nums) - 1;
        while ($left <= $right) {
            $mid = (int) (($left + $right) / 2);
            $current = $nums[$mid];
            if ($current === $target) {
                return $mid;
            } elseif ($current > $target) {
                $right = $mid - 1;
            } else {
                $left = $mid + 1;
            }
        }
        return $left;
    }
}
