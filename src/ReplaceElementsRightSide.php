<?php

namespace App;

/**
 * Replace Elements with Greatest Element on Right Side
 *
 * Given an array arr, replace every element in that array with the greatest element among the elements to its right,
 * and replace the last element with -1. After doing so, return the array.
 *
 * Example 1:
 * Input: arr = [17,18,5,4,6,1]
 * Output: [18,6,6,6,1,-1]
 * Explanation:
 * - index 0 --> the greatest element to the right of index 0 is index 1 (18).
 * - index 1 --> the greatest element to the right of index 1 is index 4 (6).
 * - index 2 --> the greatest element to the right of index 2 is index 4 (6).
 * - index 3 --> the greatest element to the right of index 3 is index 4 (6).
 * - index 4 --> the greatest element to the right of index 4 is index 5 (1).
 * - index 5 --> there are no elements to the right of index 5, so we put -1.
 *
 * https://leetcode.com/problems/replace-elements-with-greatest-element-on-right-side
 */
class ReplaceElementsRightSide
{
    /**
     * @param array<array-key, int> $arr
     * @return array<array-key, int>
     */
    public function replaceElements(array $arr): array
    {
        if (count($arr) === 1) {
            return [-1];
        }
        $result = [];
        for ($i = 0, $iMax = count($arr); $i < $iMax; $i++) {
            $result[] = $this->findMax($arr, $i + 1);
        }
        return $result;
    }

    /**
     * @param array<array-key, int> $arr
     * @param int $fromPosition
     * @return int
     */
    private function findMax(array $arr, int $fromPosition): int
    {
        if ($fromPosition === count($arr)) {
            return -1;
        }
        $max = PHP_INT_MIN;
        for ($i = $fromPosition, $iMax = count($arr); $i < $iMax; $i++) {
            if ($arr[$i] > $max) {
                $max = $arr[$i];
            }
        }
        return $max;
    }
}