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
        $left = 0;
        $right = count($nums) - 1;
        while ($left < $right) {
            if ($nums[$left] === 0) {
                $this->moveArrayToLeft($nums, $left, $right);
                if ($nums[$left] === 0) {
                    $left--;
                    $right--;
                }
            }
            $left++;
        }
    }

    /**
     * @param array<array-key, int> $arr
     * @param int $left
     * @param int $right
     * @return void
     */
    private function moveArrayToLeft(array &$arr, int $left, int $right): void
    {
        for ($i = $left; $i < $right; $i++) {
            $arr[$i] = $arr[$i + 1];
        }
        $arr[$right] = 0;
    }
}
