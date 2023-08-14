<?php

namespace App;

/**
 * Degree of an Array
 *
 * Given a non-empty array of non-negative integers nums, the degree of this array is defined as the maximum frequency
 * of any one of its elements. Your task is to find the smallest possible length of a (contiguous) subarray of nums,
 * that has the same degree as nums.
 *
 * Example 1:
 * Input: nums = [1,2,2,3,1]
 * Output: 2
 * Explanation:
 * The input array has a degree of 2 because both elements 1 and 2 appear twice.
 * Of the subarrays that have the same degree:
 * [1, 2, 2, 3, 1], [1, 2, 2, 3], [2, 2, 3, 1], [1, 2, 2], [2, 2, 3], [2, 2]
 * The shortest length is 2. So return 2.
 *
 * Example 2:
 * Input: nums = [1,2,2,3,1,4,2]
 * Output: 6
 * Explanation:
 * The degree is 3 because the element 2 is repeated 3 times.
 * So [2,2,3,1,4,2] is the shortest subarray, therefore returning 6.
 *
 * https://leetcode.com/problems/degree-of-an-array
 */
class DegreeOfArray
{
    /**
     * @param int[] $nums
     * @return int
     */
    public function findShortestSubArray(array $nums): int
    {
        $count = count($nums);
        $map = [];
        $max = 0;
        $min = $count;

        for ($i = 0; $i < $count; $i++) {
            $num = $nums[$i];

            if (!isset($map[$num])) {
                $map[$num] = [$i, $i, 1];
            } else {
                $map[$num][1] = $i;
                $map[$num][2]++;
            }

            if ($map[$num][2] > $max) {
                $max = $map[$num][2];
                $min = $map[$num][1] - $map[$num][0] + 1;
            } elseif ($map[$num][2] === $max) {
                $min = min($min, $map[$num][1] - $map[$num][0] + 1);
            }
        }

        return $min;
    }
}
