<?php

namespace App;

/**
 * Maximum Product of Three Numbers
 *
 * Given an integer array nums, find three numbers whose product is maximum and return the maximum product.
 *
 * Example 1:
 * Input: nums = [1,2,3]
 * Output: 6
 *
 * Example 2:
 * Input: nums = [1,2,3,4]
 * Output: 24
 *
 * Example 3:
 * Input: nums = [-1,-2,-3]
 * Output: -6
 *
 * https://leetcode.com/problems/maximum-product-of-three-numbers
 */
class MaximumProductOfThreeNumbers
{
    /**
     * @param array<array-key, int> $nums
     * @return int
     */
    public function maximumProduct(array $nums): int
    {
        $max1 = PHP_INT_MIN;
        $max2 = PHP_INT_MIN;
        $max3 = PHP_INT_MIN;
        $min1 = PHP_INT_MAX;
        $min2 = PHP_INT_MAX;

        foreach ($nums as $num) {
            if ($num > $max1) {
                $max3 = $max2;
                $max2 = $max1;
                $max1 = $num;
            } elseif ($num > $max2) {
                $max3 = $max2;
                $max2 = $num;
            } elseif ($num > $max3) {
                $max3 = $num;
            }

            if ($num < $min1) {
                $min2 = $min1;
                $min1 = $num;
            } elseif ($num < $min2) {
                $min2 = $num;
            }
        }

        return max($max1 * $max2 * $max3, $max1 * $min1 * $min2);
    }
}
