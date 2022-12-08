<?php

namespace App;

/**
 * RemoveElement.php
 * 
 * Given an integer array nums and an integer val, remove all occurrences of val in nums in-place. The relative order
 * of the elements may be changed. Return k after placing the final result in the first k slots of nums.
 * Do not allocate extra space for another array. You must do this by modifying the input array in-place
 * with O(1) extra memory.
 *
 * Example 1:
 * Input: nums = [3,2,2,3], val = 3 Output: 2, nums = [2,2,_,_]
 * Explanation: Your function should return k = 2, with the first two elements of nums being 2.
 * It does not matter what you leave beyond the returned k (hence they are underscores).
 *
 * https://leetcode.com/problems/remove-element
 */
class RemoveElement
{
    /**
     * @param array<array-key, int> $nums
     * @param int $val
     * @return int
     */
    public function removeElement(array &$nums, int $val): int
    {
        for ($i = 0; $i < count($nums); $i++) {
            if ($nums[$i] === $val) {
                $this->deleteArray($nums, $i);
                $i--;
            }
        }
        return count($nums);
    }

    /**
     * @param array<array-key, int> $arr
     * @param int $index
     * @return void
     */
    private function deleteArray(array &$arr, int $index): void
    {
        for ($i = $index + 1, $iMax = count($arr); $i < $iMax; $i++) {
            $arr[$i - 1] = $arr[$i];
        }
        array_splice($arr, count($arr) - 1, 1);
    }
}
