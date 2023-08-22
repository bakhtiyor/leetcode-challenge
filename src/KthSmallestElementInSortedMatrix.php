<?php

namespace App;

/**
 * Kth Smallest Element in a Sorted Matrix
 *
 * Given an nxn matrix where each of the rows and columns is sorted in ascending order, return the k-th smallest element
 * in the matrix. Note that it is the kth smallest element in the sorted order, not the kth distinct element.
 * You must find a solution with a memory complexity better than O(n^2).
 *
 * Example 1:
 * Input: matrix = [[1,5,9],[10,11,13],[12,13,15]], k = 8
 * Output: 13
 * Explanation: The elements in the matrix are [1,5,9,10,11,12,13,13,15], and the 8th smallest number is 13
 *
 * Example 2:
 * Input: matrix = [[-5]], k = 1
 * Output: -5
 *
 * https://leetcode.com/problems/kth-smallest-element-in-a-sorted-matrix
 */
class KthSmallestElementInSortedMatrix
{
    /**
     * @param int[][] $matrix
     * @param int $k
     * @return int
     */
    public function kthSmallest(array $matrix, int $k): int
    {
        $n = count($matrix);
        $left = $matrix[0][0];
        $right = $matrix[$n - 1][$n - 1];
        while ($left < $right) {
            $mid = $left + intdiv($right - $left, 2);
            $count = $this->countLessOrEqual($matrix, $mid);
            if ($count < $k) {
                $left = $mid + 1;
            } else {
                $right = $mid;
            }
        }
        return $left;
    }

    /**
     * @param int[][] $matrix
     * @param mixed $mid
     * @return int
     */
    private function countLessOrEqual(array $matrix, mixed $mid): int
    {
        $n = count($matrix);
        $count = 0;
        $row = 0;
        $col = $n - 1;
        while ($row < $n && $col >= 0) {
            if ($matrix[$row][$col] <= $mid) {
                $count += $col + 1;
                $row++;
            } else {
                $col--;
            }
        }
        return $count;
    }
}
