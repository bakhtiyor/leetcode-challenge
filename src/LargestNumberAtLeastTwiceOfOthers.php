<?php

namespace App;

/**
 * Largest Number At Least Twice of Others
 *
 * You are given an integer array nums where the largest integer is unique. Determine whether the largest element in the
 * array is at least twice as much as every other number in the array. If it is, return the index of the largest
 * element, or return -1 otherwise.
 *
 * Example 1:
 * Input: nums = [3,6,1,0]
 * Output: 1
 * Explanation: 6 is the largest integer.
 * For every other number in the array x, 6 is at least twice as big as x.
 * The index of value 6 is 1, so we return 1.
 *
 * Example 2:
 * Input: nums = [1,2,3,4]
 * Output: -1
 * Explanation: 4 is less than twice the value of 3, so we return -1.
 *
 * https://leetcode.com/problems/largest-number-at-least-twice-of-others
 */
class LargestNumberAtLeastTwiceOfOthers
{
    /**
     * @param array<array-key, int> $nums
     * @return int
     */
    public function dominantIndex(array $nums): int
    {
        $largest = -1;
        $secondLargest = -1;
        $largestIndex = -1;
        /** @var int $index */
        foreach ($nums as $index => $num) {
            if ($num > $largest) {
                $secondLargest = $largest;
                $largest = $num;
                $largestIndex = $index;
            } elseif ($num > $secondLargest) {
                $secondLargest = $num;
            }
        }
        return $largest >= 2 * $secondLargest ? $largestIndex : -1;
    }
}
