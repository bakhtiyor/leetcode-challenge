<?php

namespace App;

/**
 * Count Negative Numbers in a Sorted Matrix
 *
 * Given a m x n matrix grid which is sorted in non-increasing order both row-wise and column-wise, return the number of
 * negative numbers in grid.
 *
 * Example 1:
 * Input: grid = [[4,3,2,-1],[3,2,1,-1],[1,1,-1,-2],[-1,-1,-2,-3]]
 * Output: 8
 * Explanation: There are 8 negatives number in the matrix.
 *
 * Example 2:
 * Input: grid = [[3,2],[1,0]]
 * Output: 0
 *
 * https://leetcode.com/problems/count-negative-numbers-in-a-sorted-matrix
 */
class CountNegativeNumbersInSortedMatrix
{
    /**
     * @param int[][] $grid
     * @return int
     */
    public function countNegatives(array $grid): int
    {
        $negativeNumbers = 0;
        for ($r = 0, $rMax = count($grid); $r < $rMax; $r++) {
            for ($c = 0, $cMax = count($grid[$r]); $c < $cMax; $c++) {
                if ($grid[$r][$c] < 0) {
                    $negativeNumbers += count($grid[$r]) - $c;
                    break;
                }
            }
        }
        return $negativeNumbers;
    }
}
