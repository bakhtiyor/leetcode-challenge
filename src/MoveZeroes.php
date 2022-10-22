<?php

namespace App;

/**
 * Move Zeroes
 *
 * Given an integer array nums, move all 0's to the end of it while maintaining the relative order of the
 * non-zero elements. Note that you must do this in-place without making a copy of the array.
 * Example 1:
 * Input: nums = [0,1,0,3,12]
 * Output: [1,3,12,0,0]
 *
 * https://leetcode.com/problems/move-zeroes
 */
class MoveZeroes
{
    /**
     * @param array<array-key, int> $nums
     * @return void
     */
    public function moveZeroes(array &$nums): void
    {
        $meatBallLeftPosition = 0;
        $meatBallSize = 0;
        $curIndex = 0;
        while ($curIndex < count($nums)) {
            if ($nums[$curIndex] === 0) {
                $meatBallSize++;
            } elseif ($meatBallSize > 0) {
                $nums[$meatBallLeftPosition] = $nums[$curIndex];
                $nums[$curIndex] = 0;
                $meatBallLeftPosition++;
            } else {
                $meatBallLeftPosition++;
            }
            $curIndex++;
        }
    }
}
