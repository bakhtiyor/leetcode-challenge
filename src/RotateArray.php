<?php

namespace App;

/**
 * Rotate Array
 *
 * Given an array, rotate the array to the right by k steps, where k is non-negative.
 * Example 1:
 * Input: nums = [1,2,3,4,5,6,7], k = 3
 * Output: [5,6,7,1,2,3,4]
 * Explanation:
 * rotate 1 steps to the right: [7,1,2,3,4,5,6]
 * rotate 2 steps to the right: [6,7,1,2,3,4,5]
 * rotate 3 steps to the right: [5,6,7,1,2,3,4]
 *
 * https://leetcode.com/problems/rotate-array
 */
class RotateArray
{
    /**
     * @param array<int, int> $nums
     * @param int $k
     * @return void
     */
    public function rotate(array &$nums, int $k): void
    {
        $copy = $nums;
        $length = count($nums);
        foreach ($copy as $index => $value) {
            $z = ($index + $k) % $length;
            $nums[$z] = $value;
        }
    }
}
