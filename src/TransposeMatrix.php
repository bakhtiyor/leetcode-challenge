<?php

namespace App;

/**
 * Transpose Matrix
 *
 * Given a 2D integer array matrix, return the transpose of matrix. The transpose of a matrix is the matrix flipped over
 * its main diagonal, switching the matrix's row and column indices.
 * Example 1:
 * Input: matrix = [[1,2,3],[4,5,6],[7,8,9]]
 * Output: [[1,4,7],[2,5,8],[3,6,9]]
 *
 * Example 2:
 * Input: matrix = [[1,2,3],[4,5,6]]
 * Output: [[1,4],[2,5],[3,6]]
 *
 * https://leetcode.com/problems/transpose-matrix
 */
class TransposeMatrix
{
    /**
     * @param int[][] $matrix
     * @return int[][]
     */
    public function transpose(array $matrix): array
    {
        $colNum = count($matrix[0]);
        $rowNum = count($matrix);
        $transposedMatrix = [];
        $r = $c = 0;
        for ($col = 0; $col < $colNum; $col++) {
            for ($row = 0; $row < $rowNum; $row++) {
                $transposedMatrix[$r][$c] = $matrix[$row][$col];
                if ($c + 1 < $rowNum) {
                    $c++;
                } else {
                    $c = 0;
                    $r++;
                }
            }
        }
        return $transposedMatrix;
    }
}
