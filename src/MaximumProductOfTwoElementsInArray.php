<?php

namespace App;

/**
 * Maximum Product of Two Elements in an Array
 *
 * Given the array of integers nums, you will choose two different indices i and j of that array. Return the maximum
 * value of (nums[i]-1)*(nums[j]-1).
 *
 * Example 1:
 * Input: nums = [3,4,5,2]
 * Output: 12
 * Explanation: If you choose the indices i=1 and j=2 (indexed from 0), you will get the maximum value, that is,
 * (nums[1]-1)*(nums[2]-1) = (4-1)*(5-1) = 3*4 = 12.
 *
 * Example 2:
 * Input: nums = [1,5,4,5]
 * Output: 16
 * Explanation: Choosing the indices i=1 and j=3 (indexed from 0), you will get the maximum value of (5-1)*(5-1) = 16.
 *
 * Example 3:
 * Input: nums = [3,7]
 * Output: 12
 *
 * https://leetcode.com/problems/maximum-product-of-two-elements-in-an-array
 */
class MaximumProductOfTwoElementsInArray
{
    /**
     * @param int[] $nums
     * @return int
     */
    public function maxProduct(array $nums): int
    {
        $max = 0;
        $secondMax = 0;
        foreach ($nums as $num) {
            if ($num > $max) {
                $secondMax = $max;
                $max = $num;
            } elseif ($num > $secondMax) {
                $secondMax = $num;
            }
        }

        return ($max - 1) * ($secondMax - 1);
    }

}