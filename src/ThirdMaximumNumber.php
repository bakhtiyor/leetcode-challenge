<?php

namespace App;

/**
 * Third Maximum Number
 *
 * Given an integer array nums, return the third distinct maximum number in this array. If the third maximum
 * does not exist, return the maximum number.
 *
 * Example 1:
 * Input: nums = [3,2,1]
 * Output: 1
 * Explanation:
 * The first distinct maximum is 3.
 * The second distinct maximum is 2.
 * The third distinct maximum is 1.
 *
 * Example 2:
 * Input: nums = [1,2]
 * Output: 2
 * Explanation:
 * The first distinct maximum is 2.
 * The second distinct maximum is 1.
 * The third distinct maximum does not exist, so the maximum (2) is returned instead.
 *
 * https://leetcode.com/problems/third-maximum-number
 */
class ThirdMaximumNumber
{
    /**
     * @param array<array-key, int> $nums
     * @return int
     */
    public function thirdMax(array $nums): int
    {
        $max1 = PHP_INT_MIN;
        $max2 = PHP_INT_MIN;
        $max3 = PHP_INT_MIN;
        for ($i = 0, $iMax = count($nums); $i < $iMax; $i++) {
            if ($nums[$i] > $max1) {
                $max3 = $max2;
                $max2 = $max1;
                $max1 = $nums[$i];
            } elseif ($nums[$i] > $max2 && $nums[$i] < $max1) {
                $max3 = $max2;
                $max2 = $nums[$i];
            } elseif ($nums[$i] > $max3 && $nums[$i] < $max2) {
                $max3 = $nums[$i];
            }
        }
        if ($max3 > PHP_INT_MIN) {
            return $max3;
        } elseif ($max2 > PHP_INT_MIN && $max2 > $max1) {
            return $max2;
        }
        return $max1;
    }
}
