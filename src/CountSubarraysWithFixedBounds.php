<?php

namespace App;

/**
 * Count Subarrays With Fixed Bounds
 *
 * You are given an integer array nums and two integers minK and maxK.
 * A fixed-bound subarray of nums is a subarray that satisfies the following conditions:
 * - The minimum value in the subarray is equal to minK.
 * - The maximum value in the subarray is equal to maxK.
 * Return the number of fixed-bound subarrays. A subarray is a contiguous part of an array.
 *
 * Example 1:
 * Input: nums = [1,3,5,2,7,5], minK = 1, maxK = 5
 * Output: 2
 * Explanation: The fixed-bound subarrays are [1,3,5] and [1,3,5,2].
 *
 * Example 2:
 * Input: nums = [1,1,1,1], minK = 1, maxK = 1
 * Output: 10
 * Explanation: Every subarray of nums is a fixed-bound subarray. There are 10 possible subarrays.
 *
 * https://leetcode.com/problems/count-subarrays-with-fixed-bounds
 */
class CountSubarraysWithFixedBounds
{
    /**
     * @param array<int, int> $nums
     * @param int $minK
     * @param int $maxK
     * @return int
     */
    public function countSubarrays(array $nums, int $minK, int $maxK): int
    {
        $res = 0;
        $badIdx = $leftIdx = $rightIdx = -1;

        foreach ($nums as $index => $num) {
            if (!($minK <= $num && $num <= $maxK)) {
                $badIdx = $index;
            }

            if ($num === $minK) {
                $leftIdx = $index;
            }

            if ($num === $maxK) {
                $rightIdx = $index;
            }

            $res += max(0, min($leftIdx, $rightIdx) - $badIdx);
        }

        return $res;
    }
}
