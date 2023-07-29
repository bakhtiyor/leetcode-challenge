<?php

namespace App;

/**
 * Matrix Cells in Distance Order
 *
 * You are given four integers row, cols, rCenter, and cCenter. There is a rows x cols matrix and you are on the cell
 * with the coordinates (rCenter, cCenter). Return the coordinates of all cells in the matrix, sorted by their distance
 * from (rCenter, cCenter) from the smallest distance to the largest distance. You may return the answer in any order
 * that satisfies this condition. The distance between two cells (r1, c1) and (r2, c2) is |r1 - r2| + |c1 - c2|.
 *
 * Example 1:
 * Input: rows = 1, cols = 2, rCenter = 0, cCenter = 0
 * Output: [[0,0],[0,1]]
 * Explanation: The distances from (0, 0) to other cells are: [0,1]
 *
 * Example 2:
 * Input: rows = 2, cols = 2, rCenter = 0, cCenter = 1
 * Output: [[0,1],[0,0],[1,1],[1,0]]
 * Explanation: The distances from (0, 1) to other cells are: [0,1,1,2]
 * The answer [[0,1],[1,1],[0,0],[1,0]] would also be accepted as correct.
 *
 * Example 3:
 * Input: rows = 2, cols = 3, rCenter = 1, cCenter = 2
 * Output: [[1,2],[0,2],[1,1],[0,1],[1,0],[0,0]]
 * Explanation: The distances from (1, 2) to other cells are: [0,1,1,2,2,3]
 * There are other answers that would also be accepted as correct, such as [[1,2],[1,1],[0,2],[1,0],[0,1],[0,0]].
 *
 * https://leetcode.com/problems/matrix-cells-in-distance-order
 */
class MatrixCellsInDistanceOrder
{
    /**
     * @param int $rows
     * @param int $cols
     * @param int $rCenter
     * @param int $cCenter
     * @return array
     */
    public function allCellsDistOrder(int $rows, int $cols, int $rCenter, int $cCenter): array
    {
        $distancesAwayFromCenter = [];
        for ($r = 0; $r < $rows; $r++) {
            for ($c = 0; $c < $cols; $c++) {
                $distancesAwayFromCenter[$r . ',' . $c] = [
                    abs($rCenter - $r) + abs($cCenter - $c)
                ];
            }
        }

        asort($distancesAwayFromCenter);

        $ans = [];
        $arr = array_keys($distancesAwayFromCenter);
        for ($i = 0, $iMax = count($arr); $i < $iMax; $i++) {
            $ans [] = explode(',', $arr[$i]);
        }

        return $ans;
    }
}
