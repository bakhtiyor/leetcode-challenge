<?php

namespace App;

/**
 * Squares of a Sorted Array
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
        $numsSquared = array_map(static fn ($num) => $num * $num, $nums);
        sort($numsSquared);
        return $numsSquared;
    }
}
