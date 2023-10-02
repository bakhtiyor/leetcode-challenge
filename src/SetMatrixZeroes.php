<?php

namespace App;

/**
 * Set Matrix Zeroes
 *
 * Given an m x n integer matrix matrix, if an element is 0, set its entire row and column to 0's. You must do it in
 * place.
 *
 * Example 1:
 * Input: matrix = [[1,1,1],[1,0,1],[1,1,1]]
 * Output: [[1,0,1],[0,0,0],[1,0,1]]
 *
 * Example 2:
 * Input: matrix = [[0,1,2,0],[3,4,5,2],[1,3,1,5]]
 * Output: [[0,0,0,0],[0,4,5,0],[0,3,1,0]]
 *
 * https://leetcode.com/problems/set-matrix-zeroes
 */
class SetMatrixZeroes
{
    /**
     * @param int[][] $matrix
     * @return void
     */
    public function setZeroes(array &$matrix): void
    {
        $rows = [];
        $columns = [];
        $rowLength = count($matrix);
        $columnLength = count($matrix[0]);

        for ($row = 0; $row < $rowLength; $row++) {
            for ($column = 0; $column < $columnLength; $column++) {
                if ($matrix[$row][$column] === 0) {
                    $rows[$row] = true;
                    $columns[$column] = true;
                }
            }
        }

        for ($row = 0; $row < $rowLength; $row++) {
            for ($column = 0; $column < $columnLength; $column++) {
                if (isset($rows[$row]) || isset($columns[$column])) {
                    $matrix[$row][$column] = 0;
                }
            }
        }
    }
}
