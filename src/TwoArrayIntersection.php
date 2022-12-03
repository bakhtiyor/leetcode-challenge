<?php

namespace App;

/**
 * Intersection of Two Arrays
 *
 * Given two integer arrays nums1 and nums2, return an array of their intersection. Each element in the result must be
 * unique and you may return the result in any order.
 *
 * Example 1:
 * Input: nums1 = [1,2,2,1], nums2 = [2,2]          Output: [2]
 *
 * Example 2:
 * Input: nums1 = [4,9,5], nums2 = [9,4,9,8,4]      Output: [9,4]       Explanation: [4,9] is also accepted.
 *
 * https://leetcode.com/problems/intersection-of-two-arrays
 */
class TwoArrayIntersection
{
    /**
     * @psalm-suppress UnusedForeachValue
     * @param array<array-key, int> $nums1
     * @param array<array-key, int> $nums2
     * @return array<array-key, int>
     */
    public function intersection(array $nums1, array $nums2): array
    {
        $nums1Hash = $this->createHash($nums1);
        $nums2Hash = $this->createHash($nums2);

        $intersections = [];
        foreach ($nums1Hash as $num1Key => $num1Value) {
            if (isset($nums2Hash[$num1Key])) {
                $intersections[] = (int) $num1Key;
            }
        }
        return $intersections;
    }

    /**
     * @param array<array-key, int> $nums
     * @return array<array-key, int>
     */
    private function createHash(array $nums): array
    {
        $numsHash = [];
        foreach ($nums as $num) {
            if (isset($numsHash[$num])) {
                $numsHash[$num]++;
            } else {
                $numsHash[$num] = 1;
            }
        }

        return $numsHash;
    }
}
