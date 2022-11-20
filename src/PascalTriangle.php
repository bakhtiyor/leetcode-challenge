<?php

namespace App;

/**
 * Pascal's Triangle
 *
 * Given an integer numRows, return the first numRows of Pascal's triangle. In Pascal's triangle, each number is the
 * sum of the two numbers directly above it as shown:
 *     1
 *    1 1
 *   1 2 1
 *  1 3 3 1
 * 1 3 6 4 1
 * Example 1:
 * Input: numRows = 5       Output: [[1],[1,1],[1,2,1],[1,3,3,1],[1,4,6,4,1]]
 *
 * https://leetcode.com/problems/pascals-triangle
 */
class PascalTriangle
{
    /**
     * @param int $numRows
     * @return array<array-key, array<array-key, int>>
     */
    public function generate(int $numRows): array
    {
        $triangle = [];
        for ($numRow = 0; $numRow < $numRows; $numRow++) {
            if ($numRow > 0) {
                $triangle[] = $this->pascalTriangle($numRow + 1, $triangle[$numRow - 1]);
            } else {
                $triangle[] = $this->pascalTriangle($numRow + 1, []);
            }
        }
        return $triangle;
    }

    /**
     * @param int $numRow
     * @param array<array-key, int> $previousRow
     * @return array<array-key, int>
     */
    private function pascalTriangle(int $numRow, array $previousRow): array
    {
        $result = [];
        $countPreviousRow = count($previousRow);
        for ($i = 0; $i < $numRow; $i++) {
            if ($i > 0 && $i < $countPreviousRow) {
                $result[$i] = ($previousRow[$i - 1] + $previousRow[$i]);
            } else {
                $result[$i] = 1;
            }
        }
        return $result;
    }
}
