<?php

namespace App;

/**
 * Squares of a Sorted Array
 *
 * Given an integer array nums sorted in non-decreasing order, return an array of the squares of each number sorted
 * in non-decreasing order.
 *
 * Example 1:
 * Input: nums = [-4,-1,0,3,10]
 * Output: [0,1,9,16,100]
 * Explanation: After squaring, the array becomes [16,1,0,9,100].
 * After sorting, it becomes [0,1,9,16,100].
 *
 * https://leetcode.com/problems/squares-of-a-sorted-array
 */
class SquaresOfSortedArray
{
    /**
     * @param array<array-key, int> $nums
     * @return array<array-key, int>
     */
    public function sortedSquares(array $nums): array
    {
        $result = [];
        $length = count($nums);
        // in php if array is not initialized, and you assign value by index in random index it will show array
        // in the way it was generated, not ordered by its index.
        for ($i = 0; $i < $length; $i++) {
            $result[$i] = 0;
        }
        $left = 0;
        $right = $length - 1;
        for ($i = $length - 1; $i >= 0; $i--) {
            if (abs($nums[$left]) > abs($nums[$right])) {
                $result[$i] = $nums[$left] * $nums[$left];
                $left++;
            } else {
                $result[$i] = $nums[$right] * $nums[$right];
                $right--;
            }
        }
        return $result;
    }
}
