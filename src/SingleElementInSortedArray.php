<?php

namespace App;

/**
 * Single Element in a Sorted Array
 *
 * You are given a sorted array consisting of only integers where every element appears exactly twice, except for one
 * element which appears exactly once. Return the single element that appears only once.
 * Your solution must run in O(log n) time and O(1) space.
 *
 * Example 1:
 * Input: nums = [1,1,2,3,3,4,4,8,8]
 * Output: 2
 *
 * Example 2:
 * Input: nums = [3,3,7,7,10,11,11]
 * Output: 10
 *
 * https://leetcode.com/problems/single-element-in-a-sorted-array
 */
class SingleElementInSortedArray
{
    /**
     * @param array<array-key, int> $numbers
     * @return int
     */
    public function singleNonDuplicate(array $numbers): int
    {
        $item = $numbers[0];
        $itemCount = 1;
        for ($i = 1, $iMax = count($numbers); $i < $iMax; $i++) {
            if ($numbers[$i] === $item) {
                $itemCount++;
            } elseif ($itemCount === 1) {
                return $item;
            } else {
                $itemCount = 1;
                $item = $numbers[$i];
            }
        }
        return $item;
    }
}
