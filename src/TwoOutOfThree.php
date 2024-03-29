<?php

namespace App;

/**
 * Two Out of Three
 *
 * Given three integer arrays nums1, nums2, and nums3, return a distinct array containing all the values that are
 * present in at least two out of the three arrays. You may return the values in any order.
 *
 * Example 1:
 * Input: nums1 = [1,1,3,2], nums2 = [2,3], nums3 = [3]
 * Output: [3,2]
 * Explanation: The values that are present in at least two arrays are:
 * - 3, in all three arrays.
 * - 2, in nums1 and nums2.
 *
 * Example 2:
 * Input: nums1 = [3,1], nums2 = [2,3], nums3 = [1,2]
 * Output: [2,3,1]
 * Explanation: The values that are present in at least two arrays are:
 * - 2, in nums2 and nums3.
 * - 3, in nums1 and nums2.
 * - 1, in nums1 and nums3.
 *
 * Example 3:
 * Input: nums1 = [1,2,2], nums2 = [4,3,3], nums3 = [5]
 * Output: []
 * Explanation: No value is present in at least two arrays.
 *
 * https://leetcode.com/problems/two-out-of-three
 */
class TwoOutOfThree
{
    /**
     * @param int[] $nums1
     * @param int[] $nums2
     * @param int[] $nums3
     * @return int[]
     */
    public function twoOutOfThree(array $nums1, array $nums2, array $nums3): array
    {
        $unique_nums = array_unique(array_merge($nums1, $nums2, $nums3));

        $ans = [];
        foreach ($unique_nums as $num) {
            $hits = 0;
            if (in_array($num, $nums1, true)) {
                $hits++;
            }
            if (in_array($num, $nums2, true)) {
                $hits++;
            }
            if (in_array($num, $nums3, true)) {
                $hits++;
            }

            if ($hits >= 2) {
                $ans[] = $num;
            }
        }

        return $ans;
    }

}
