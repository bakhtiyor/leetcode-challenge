<?php

namespace App;

/**
 * Find the Difference of Two Arrays
 *
 * Given two 0-indexed integer arrays nums1 and nums2, return a list answer of size 2 where:
 * - answer[0] is a list of all distinct integers in nums1 which are not present in nums2.
 * - answer[1] is a list of all distinct integers in nums2 which are not present in nums1.
 * Note that the integers in the lists may be returned in any order.
 *
 * Example 1:
 * Input: nums1 = [1,2,3], nums2 = [2,4,6]
 * Output: [[1,3],[4,6]]
 * Explanation:
 * For nums1, nums1[1] = 2 is present at index 0 of nums2, whereas nums1[0] = 1 and nums1[2] = 3 are not present in
 * nums2. Therefore, answer[0] = [1,3].
 * For nums2, nums2[0] = 2 is present at index 1 of nums1, whereas nums2[1] = 4 and nums2[2] = 6 are not present in
 * nums2. Therefore, answer[1] = [4,6].
 *
 * Example 2:
 * Input: nums1 = [1,2,3,3], nums2 = [1,1,2,2]
 * Output: [[3],[]]
 * Explanation:
 * For nums1, nums1[2] and nums1[3] are not present in nums2. Since nums1[2] == nums1[3], their value is only included
 * once and answer[0] = [3]. Every integer in nums2 is present in nums1. Therefore, answer[1] = [].
 *
 * https://leetcode.com/problems/find-the-difference-of-two-arrays
 */
class FindDifferenceOfTwoArrays
{
    /**
     * @param int[] $nums1
     * @param int[] $nums2
     * @return int[][]
     */
    public function findDifference(array $nums1, array $nums2): array
    {
        $nums1Diff = [];
        foreach ($nums1 as $num) {
            if (!in_array($num, $nums2) && !in_array($num, $nums1Diff, true)) {
                $nums1Diff[] = $num;
            }
        }

        $nums2Diff = [];
        foreach ($nums2 as $num) {
            if (!in_array($num, $nums1) && !in_array($num, $nums2Diff, true)) {
                $nums2Diff[] = $num;
            }
        }
        return [$nums1Diff, $nums2Diff];
    }
}
