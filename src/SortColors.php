<?php

namespace App;

/**
 * Sort Colors
 *
 * Given an array nums with n objects colored red, white, or blue, sort them in-place so that objects of the same color
 * are adjacent, with the colors in the order red, white, and blue. We will use the integers 0, 1, and 2 to represent
 * the color red, white, and blue, respectively. You must solve this problem without using the library's sort function.
 *
 * Example 1:
 * Input: nums = [2,0,2,1,1,0]
 * Output: [0,0,1,1,2,2]
 *
 * Example 2:
 * Input: nums = [2,0,1]
 * Output: [0,1,2]
 *
 * https://leetcode.com/problems/sort-colors
 */
class SortColors
{
    /**
     * @param array<array-key, int> $nums
     * @return void
     */
    public function sortColors(array &$nums): void
    {
        for ($i = 0, $iMax = count($nums); $i < $iMax; $i++) {
            for ($j = $i + 1; $j < $iMax; $j++) {
                if ($nums[$i] > $nums[$j]) {
                    $tmp = $nums[$j];
                    $nums[$j] = $nums[$i];
                    $nums[$i] = $tmp;
                }
            }
        }
    }
}
