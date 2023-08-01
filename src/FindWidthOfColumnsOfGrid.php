<?php

namespace App;

/**
 * Find the Width of Columns of a Grid
 *
 * You are given a 0-indexed m x n integer matrix grid. The width of a column is the maximum length of its integers.
 *  - For example, if grid = [[-10], [3], [12]], the width of the only column is 3 since -10 is of length 3.
 * Return an integer array ans of size n where ans[i] is the width of the i-th column.
 * The length of an integer x with len digits is equal to len if x is non-negative, and len + 1 otherwise.
 *
 * Example 1:
 * Input: grid = [[1],[22],[333]]
 * Output: [3]
 * Explanation: In the 0th column, 333 is of length 3.
 *
 * Example 2:
 * Input: grid = [[-15,1,3],[15,7,12],[5,6,-2]]
 * Output: [3,1,2]
 * Explanation:
 *  - In the 0th column, only -15 is of length 3.
 *  - In the 1st column, all integers are of length 1.
 *  - In the 2nd column, both 12 and -2 are of length 2.
 *
 * https://leetcode.com/problems/find-the-width-of-columns-of-a-grid
 */
class FindWidthOfColumnsOfGrid
{
    /**
     * @param int[][] $grid
     * @return int[]
     */
    public function findColumnWidth(array $grid): array
    {
        $result = [];
        foreach ($grid as $row) {
            foreach ($row as $key => $value) {
                $result[$key] = max($result[$key] ?? 0, strlen((string) $value));
            }
        }
        return $result;
    }
}
