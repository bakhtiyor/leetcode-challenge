<?php

namespace App;

/**
 * Sum of All Odd Length Subarrays
 *
 * Given an array of positive integers arr, return the sum of all possible odd-length subarrays of arr.
 * A subarray is a contiguous subsequence of the array.
 *
 * Example 1:
 * Input: arr = [1,4,2,5,3]
 * Output: 58
 * Explanation: The odd-length subarrays of arr and their sums are:
 * [1] = 1
 * [4] = 4
 * [2] = 2
 * [5] = 5
 * [3] = 3
 * [1,4,2] = 7
 * [4,2,5] = 11
 * [2,5,3] = 10
 * [1,4,2,5,3] = 15
 * If we add all these together we get 1 + 4 + 2 + 5 + 3 + 7 + 11 + 10 + 15 = 58
 *
 * Example 2:
 * Input: arr = [1,2]
 * Output: 3
 * Explanation: There are only 2 subarrays of odd length, [1] and [2]. Their sum is 3.
 *
 * Example 3:
 * Input: arr = [10,11,12]
 * Output: 66
 *
 * https://leetcode.com/problems/sum-of-all-odd-length-subarrays
 */
class SumOfAllOddLengthSubarrays
{
    /**
     * @param int[] $arr
     * @return int
     */
    public function sumOddLengthSubarrays(array $arr): int
    {
        $sum = 0;
        $length = count($arr);

        for ($i = 0; $i < $length; $i++) {
            $sum += $arr[$i];
            $currentSum = $arr[$i];

            for ($j = $i + 1; $j < $length; $j++) {
                $currentSum += $arr[$j];

                if (($j - $i) % 2 === 0) {
                    $sum += $currentSum;
                }
            }
        }

        return $sum;
    }
}
