<?php

namespace App;

/**
 * Subarray Sums Divisible by K
 *
 * Given an integer array nums and an integer k, return the number of non-empty subarrays that have a sum divisible by k
 * A subarray is a contiguous part of an array.
 *
 * Example 1:
 * Input: nums = [4,5,0,-2,-3,1], k = 5
 * Output: 7
 * Explanation: There are 7 subarrays with a sum divisible by k = 5:
 * [4, 5, 0, -2, -3, 1], [5], [5, 0], [5, 0, -2, -3], [0], [0, -2, -3], [-2, -3]
 *
 * Example 2:
 * Input: nums = [5], k = 9
 * Output: 0
 *
 * https://leetcode.com/problems/subarray-sums-divisible-by-k
 */
class SubarraySumsDivisibleByK
{
    /**
     * @param array<array-key, int> $nums
     * @param int $k
     * @return int
     */
    public function subarraysDivByK(array $nums, int $k): int
    {
        $prefixMod = 0;
        $result = 0;

        $modGroups = array_fill(0, $k, 0);
        $modGroups[0] = 1;

        for ($i = 0, $iMax = count($nums); $i < $iMax; $i++) {
            $prefixMod = ($prefixMod + $nums[$i] % $k + $k) % $k;
            $result += $modGroups[$prefixMod];
            $modGroups[$prefixMod]++;
        }

        return $result;
    }
}
