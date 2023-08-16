<?php

namespace App;

/**
 * Largest Local Values in a Matrix
 *
 * You are given an n x n integer matrix grid.
 * Generate an integer matrix maxLocal of size (n - 2) x (n - 2) such that:
 * - maxLocal[i][j] is equal to the largest value of the 3 x 3 matrix in grid centered around row i + 1 and column j + 1
 * In other words, we want to find the largest value in every contiguous 3 x 3 matrix in grid.
 * Return the generated matrix.
 *
 * Example 1:
 * Input: grid = [[9,9,8,1],[5,6,2,6],[8,2,6,4],[6,2,2,2]]
 * Output: [[9,9],[8,6]]
 * Explanation: The diagram above shows the original matrix and the generated matrix.
 * Notice that each value in the generated matrix corresponds to the largest value of a contiguous 3 x 3 matrix in grid.
 *
 * Example 2:
 * Input: grid = [[1,1,1,1,1],[1,1,1,1,1],[1,1,2,1,1],[1,1,1,1,1],[1,1,1,1,1]]
 * Output: [[2,2,2],[2,2,2],[2,2,2]]
 * Explanation: Notice that the 2 is contained within every contiguous 3 x 3 matrix in grid.
 *
 * https://leetcode.com/problems/largest-local-values-in-a-matrix
 */
class LargestLocalValuesInMatrix
{
    /**
     * @param array<array<array-key, int>> $grid
     * @return array
     */
    public function largestLocal(array $grid): array
    {
        $result = [];
        $n = count($grid);
        for ($i = 1; $i < $n - 1; $i++) {
            for ($j = 1; $j < $n - 1; $j++) {
                $result[$i - 1][$j - 1] = $this->getMaxLocal($grid, $i, $j);
            }
        }

        return $result;
    }

    /**
     * @param array<array<array-key, int>> $grid
     * @param int $i
     * @param int $j
     * @return int
     */
    private function getMaxLocal(array $grid, int $i, int $j): int
    {
        $max = $grid[$i][$j];
        for ($k = $i - 1; $k <= $i + 1; $k++) {
            for ($l = $j - 1; $l <= $j + 1; $l++) {
                if ($grid[$k][$l] > $max) {
                    $max = $grid[$k][$l];
                }
            }
        }

        return $max;
    }
}
