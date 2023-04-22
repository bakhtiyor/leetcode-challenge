<?php

namespace App;

/**
 * Matrix Diagonal Sum
 *
 * Given a square matrix mat, return the sum of the matrix diagonals. Only include the sum of all the elements on the
 * primary diagonal and all the elements on the secondary diagonal that are not part of the primary diagonal.
 * Example 1:
 * Input: mat = [[1,2,3],
 *              [4,5,6],
 *              [7,8,9]]
 * Output: 25
 * Explanation: Diagonals sum: 1 + 5 + 9 + 3 + 7 = 25
 * Notice that element mat[1][1] = 5 is counted only once.
 *
 * https://leetcode.com/problems/matrix-diagonal-sum
 */
class MatrixDiagonalSum
{
    /**
     * @param int[][] $mat
     * @return int
     */
    public function diagonalSum(array $mat): int
    {
        $sum = 0;
        $n = count($mat);
        for ($i = 0; $i < $n; $i++) {
            $sum += $mat[$i][$i];
            $sum += $mat[$i][$n - $i - 1];
        }
        return $sum - ($n % 2 === 0 ? 0 : $mat[$n / 2][$n / 2]);
    }
}
