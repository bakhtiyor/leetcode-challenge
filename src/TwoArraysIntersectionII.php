<?php

namespace App;

/**
 * Intersection of Two Arrays II
 *
 * Given two integer arrays nums1 and nums2, return an array of their intersection. Each element in the result must
 * appear as many times as it shows in both arrays and you may return the result in any order.
 *
 * Example 1:
 * Input: nums1 = [1,2,2,1], nums2 = [2,2]
 * Output: [2,2]
 *
 * Example 2:
 * Input: nums1 = [4,9,5], nums2 = [9,4,9,8,4]
 * Output: [4,9]
 *
 * https://leetcode.com/problems/intersection-of-two-arrays-ii
 */
class TwoArraysIntersectionII
{
    /**
     * @param array<array-key, int> $nums1
     * @param array<array-key, int> $nums2
     * @return array<array-key, int>
     */
    public function intersect(array $nums1, array $nums2): array
    {
        $nums1Hash = $this->createHash($nums1);
        $nums2Hash = $this->createHash($nums2);

        $intersections = [];
        foreach ($nums1Hash as $num1Key => $num1Value) {
            if (isset($nums2Hash[$num1Key])) {
                $repeatNum = min($nums2Hash[$num1Key], $num1Value);
                for ($i = 1; $i <= $repeatNum; $i++) {
                    $intersections[] = (int) $num1Key;
                }
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
