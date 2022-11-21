<?php

namespace App;

/**
 * Pascal's Triangle II
 *
 * Given an integer rowIndex, return the rowIndex-th (0-indexed) row of the Pascal's triangle.
 * In Pascal's triangle, each number is the sum of the two numbers directly above it as shown:
 *     1
 *    1 1
 *   1 2 1
 *  1 3 3 1
 * 1 3 6 4 1
 * Example 1:
 * Input: rowIndex = 3       Output: [1,3,3,1]
 * Example 2:
 * Input: rowIndex = 0       Output: [1]
 * Example 3:
 * Input: rowIndex = 1       Output: [1,1]
 *
 * https://leetcode.com/problems/pascals-triangle-ii
 */
class PascalTriangleII
{
    /**
     * @param int $rowIndex
     * @return array<array-key, int>
     */
    public function getRow(int $rowIndex): array
    {
        $triangle = [];
        for ($numRow = 0; $numRow < $rowIndex + 1; $numRow++) {
            if ($numRow > 0) {
                $triangle[] = $this->pascalTriangle($numRow + 1, $triangle[$numRow - 1]);
            } else {
                $triangle[] = $this->pascalTriangle($numRow + 1, []);
            }
        }
        return $triangle[$rowIndex];
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
