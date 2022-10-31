<?php

namespace App;

/**
 * Toeplitz Matrix
 *
 * Given an m x n matrix, return true if the matrix is Toeplitz. Otherwise, return false.
 * A matrix is Toeplitz if every diagonal from top-left to bottom-right has the same elements.
 * Example 1:
 * Input: matrix = [[1,2,3,4],[5,1,2,3],[9,5,1,2]]
 * Output: true
 * Explanation: In the above grid, the diagonals are: "[9]", "[5, 5]", "[1, 1, 1]", "[2, 2, 2]", "[3, 3]", "[4]".
 * In each diagonal all elements are the same, so the answer is True.
 *
 * https://leetcode.com/problems/toeplitz-matrix
 */
class ToeplitzMatrix
{
    /**
     * @param array<array-key, array<array-key, int>> $matrix
     * @return bool
     */
    public function isToeplitzMatrix(array $matrix): bool
    {
        $colNum = $curColNum = count($matrix[0]);
        $rowNum = count($matrix);
        for ($r = 0; $r < $rowNum; $r++) {
            if ($r > 0) {
                $curColNum = $r;
            }
            for ($c = 0; $c < $curColNum; $c++) {
                $row = $r;
                $col = $c;
                while ($row + 1 < $rowNum && $col + 1 < $colNum) {
                    if ($matrix[$row][$col] === $matrix[$row + 1][$col + 1]) {
                        $row++;
                        $col++;
                    } else {
                        return false;
                    }
                }
            }
        }
        return true;
    }
}
