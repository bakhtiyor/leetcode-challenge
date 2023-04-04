<?php

namespace App;

/**
 * Merge Two 2D Arrays by Summing Values
 *
 * You are given two 2D integer arrays nums1 and nums2.
 * - nums1[i] = [id_i, val_i] indicate that the number with the id id_i has a value equal to val_i.
 * - nums2[i] = [id_i, val_i] indicate that the number with the id id_i has a value equal to val_i.
 * Each array contains unique ids and is sorted in ascending order by id.
 * Merge the two arrays into one array that is sorted in ascending order by id, respecting the following conditions:
 * - Only ids that appear in at least one of the two arrays should be included in the resulting array.
 * - Each id should be included only once and its value should be the sum of the values of this id in the two arrays.
 * If the id does not exist in one of the two arrays then its value in that array is considered to be 0.
 * Return the resulting array. The returned array must be sorted in ascending order by id.
 *
 * Example 1:
 * Input: nums1 = [[1,2],[2,3],[4,5]], nums2 = [[1,4],[3,2],[4,1]]
 * Output: [[1,6],[2,3],[3,2],[4,6]]
 * Explanation: The resulting array contains the following:
 * - id = 1, the value of this id is 2 + 4 = 6.
 * - id = 2, the value of this id is 3.
 * - id = 3, the value of this id is 2.
 * - id = 4, the value of this id is 5 + 1 = 6.
 *
 * Example 2:
 * Input: nums1 = [[2,4],[3,6],[5,5]], nums2 = [[1,3],[4,3]]
 * Output: [[1,3],[2,4],[3,6],[4,3],[5,5]]
 * Explanation: There are no common ids, so we just include each id with its value in the resulting list.
 *
 * https://leetcode.com/problems/merge-two-2d-arrays-by-summing-values
 */
class MergeTwo2DArraysBySummingValues
{
    /**
     * @param int[][] $nums1
     * @param int[][] $nums2
     * @return int[][]
     */
    public function mergeArrays(array $nums1, array $nums2): array
    {
        $result = [];
        $i = 0;
        $j = 0;
        while ($i < count($nums1) && $j < count($nums2)) {
            if ($nums1[$i][0] === $nums2[$j][0]) {
                $result[] = [$nums1[$i][0], $nums1[$i][1] + $nums2[$j][1]];
                $i++;
                $j++;
            } elseif ($nums1[$i][0] < $nums2[$j][0]) {
                $result[] = $nums1[$i];
                $i++;
            } else {
                $result[] = $nums2[$j];
                $j++;
            }
        }
        return [...$result, ...array_slice($nums1, $i), ...array_slice($nums2, $j)];
    }
}
