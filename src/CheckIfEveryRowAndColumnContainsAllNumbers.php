<?php

namespace App;

/**
 * Check if Every Row and Column Contains All Numbers
 *
 * An n x n matrix is valid if every row and every column contains all the integers from 1 to n (inclusive).
 * Given an n x n integer matrix, return true if the matrix is valid. Otherwise, return false.
 *
 * Example 1:
 * Input: matrix = [[1,2,3],[3,1,2],[2,3,1]]
 * Output: true
 * Explanation: In this case, n = 3, and every row and column contains the numbers 1, 2, and 3.
 * Hence, we return true.
 *
 * Example 2:
 * Input: matrix = [[1,1,1],[1,2,3],[1,2,3]]
 * Output: false
 * Explanation: In this case, n = 3, but the first row and the first column do not contain the numbers 2 or 3.
 * Hence, we return false.
 *
 * https://leetcode.com/problems/check-if-every-row-and-column-contains-all-numbers
 */
class CheckIfEveryRowAndColumnContainsAllNumbers
{
    /**
     * @param int[][] $matrix
     * @return bool
     */
    public function checkValid(array $matrix): bool
    {
        $n = count($matrix);
        $row = [];
        $col = [];

        for ($i = 0; $i < $n; $i++) {
            $row[$i] = [];
            $col[$i] = [];
        }

        for ($i = 0; $i < $n; $i++) {
            for ($j = 0; $j < $n; $j++) {
                if (isset($row[$i][$matrix[$i][$j]])) {
                    return false;
                }

                if (isset($col[$j][$matrix[$i][$j]])) {
                    return false;
                }

                $row[$i][$matrix[$i][$j]] = true;
                $col[$j][$matrix[$i][$j]] = true;
            }
        }

        return true;
    }
}
