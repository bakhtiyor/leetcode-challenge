<?php

namespace App;

/**
 * Duplicate Zeros
 *
 * Given a fixed-length integer array arr, duplicate each occurrence of zero, shifting the remaining elements
 * to the right.
 * Note that elements beyond the length of the original array are not written. Do the above modifications to the input
 * array in place and do not return anything.
 * Example 1:
 * Input: arr = [1,0,2,3,0,4,5,0]
 * Output: [1,0,0,2,3,0,0,4]
 * Explanation: After calling your function, the input array is modified to: [1,0,0,2,3,0,0,4]
 * Example 2:
 * Input: arr = [1,2,3]
 * Output: [1,2,3]
 * Explanation: After calling your function, the input array is modified to: [1,2,3]
 *
 * https://leetcode.com/problems/duplicate-zeros
 */
class DuplicateZeros
{
    /**
     * @param array<array-key, int> $arr
     * @return void
     */
    public function duplicateZeros(array &$arr): void
    {
        $curPos = 0;
        while ($curPos < count($arr) - 1) {
            if ($arr[$curPos] === 0) {
                $curPos++;
                $this->shiftArray($arr, $curPos, 0);
            }
            $curPos++;
        }
    }

    /**
     * @param array<array-key, int> $arr
     * @param int $index
     * @param int $value
     * @return void
     */
    private function shiftArray(array &$arr, int $index, int $value): void
    {
        for ($i = count($arr) - 1; $i > $index; $i--) {
            $arr[$i] = $arr[$i - 1];
        }
        $arr[$index] = $value;
    }
}
