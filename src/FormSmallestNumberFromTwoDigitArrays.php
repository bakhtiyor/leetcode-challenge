<?php

namespace App;

/**
 * Form Smallest Number From Two Digit Arrays
 *
 * Given two arrays of unique digits nums1 and nums2, return the smallest number that contains at least one digit from
 * each array.
 *
 * Example 1:
 * Input: nums1 = [4,1,3], nums2 = [5,7]
 * Output: 15
 * Explanation: The number 15 contains the digit 1 from nums1 and the digit 5 from nums2. It can be proven that 15 is
 * the smallest number we can have.
 * Example 2:
 * Input: nums1 = [3,5,2,6], nums2 = [3,1,7]
 *
 * Output: 3
 * Explanation: The number 3 contains the digit 3 which exists in both arrays.
 *
 * https://leetcode.com/problems/form-smallest-number-from-two-digit-arrays
 */
class FormSmallestNumberFromTwoDigitArrays
{
    /**
     * @param int[] $nums1
     * @param int[] $nums2
     * @return int
     */
    public function minNumber(array $nums1, array $nums2): int
    {
        sort($nums1);
        sort($nums2);

        $set = array();
        foreach ($nums1 as $num) {
            $set[$num] = true;
        }

        foreach ($nums2 as $num) {
            if (isset($set[$num])) {
                return $num;
            }
        }

        $min1 = PHP_INT_MAX;
        $min2 = PHP_INT_MAX;

        foreach ($nums1 as $num) {
            $min1 = min($min1, $num);
        }

        foreach ($nums2 as $num) {
            $min2 = min($min2, $num);
        }

        if ($min1 < $min2) {
            return $min1 * 10 + $min2;
        }

        return $min2 * 10 + $min1;
    }
}
