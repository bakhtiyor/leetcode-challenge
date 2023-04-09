<?php

namespace App;

/**
 * Valid Sudoku
 *
 * Determine if a 9 x 9 Sudoku board is valid. Only the filled cells need to be validated according to the following
 * rules:
 * - Each row must contain the digits 1-9 without repetition.
 * - Each column must contain the digits 1-9 without repetition.
 * - Each of the nine 3 x 3 sub-boxes of the grid must contain the digits 1-9 without repetition.
 * Note: A Sudoku board (partially filled) could be valid but is not necessarily solvable.
 *
 * Example 1:
 * Input: board =
 * [["5","3",".",".","7",".",".",".","."]
 * ,["6",".",".","1","9","5",".",".","."]
 * ,[".","9","8",".",".",".",".","6","."]
 * ,["8",".",".",".","6",".",".",".","3"]
 * ,["4",".",".","8",".","3",".",".","1"]
 * ,["7",".",".",".","2",".",".",".","6"]
 * ,[".","6",".",".",".",".","2","8","."]
 * ,[".",".",".","4","1","9",".",".","5"]
 * ,[".",".",".",".","8",".",".","7","9"]]
 * Output: true
 *
 * Example 2:
 * Input: board =
 * [["8","3",".",".","7",".",".",".","."]
 * ,["6",".",".","1","9","5",".",".","."]
 * ,[".","9","8",".",".",".",".","6","."]
 * ,["8",".",".",".","6",".",".",".","3"]
 * ,["4",".",".","8",".","3",".",".","1"]
 * ,["7",".",".",".","2",".",".",".","6"]
 * ,[".","6",".",".",".",".","2","8","."]
 * ,[".",".",".","4","1","9",".",".","5"]
 * ,[".",".",".",".","8",".",".","7","9"]]
 * Output: false
 * Explanation: Same as Example 1, except with the 5 in the top left corner being modified to 8. Since there are two 8's
 * in the top left 3x3 sub-box, it is invalid.
 *
 * https://leetcode.com/problems/valid-sudoku
 */
class ValidSudoku
{
    /**
     * @param string[][] $board
     * @return bool
     */
    public function isValidSudoku(array $board): bool
    {
        foreach ($board as $row) {
            if (!$this->isValidRow($row)) {
                return false;
            }
        }

        if (!$this->isValidColumn($board)) {
            return false;
        }

        return $this->isValidBox($board);
    }

    /**
     * @param string[] $row
     * @return bool
     */
    private function isValidRow(array $row): bool
    {
        $hash = [];
        foreach ($row as $item) {
            if ($item !== '.') {
                if (!isset($hash[$item])) {
                    $hash[$item] = 1;
                } else {
                    return false;
                }
            }
        }

        return true;
    }

    /**
     * @param string[][] $board
     * @return bool
     */
    private function isValidColumn(array $board): bool
    {
        $rowCount = count($board);
        $col = $board[0];
        $colCount = count($col);
        for ($col = 0; $col < $colCount; $col++) {
            $hash = [];
            for ($row = 0; $row < $rowCount; $row++) {
                $value = $board[$row][$col];
                if ($value !== '.') {
                    if (!isset($hash[$value])) {
                        $hash[$value] = 1;
                    } else {
                        return false;
                    }
                }
            }
        }

        return true;
    }

    /**
     * @param string[][] $board
     * @return bool
     */
    private function isValidBox(array $board): bool
    {
        for ($boxRow = 0; $boxRow <= 8; $boxRow += 3) {
            for ($boxCol = 0; $boxCol <= 8; $boxCol += 3) {
                $hash = [];
                for ($row = $boxRow; $row < $boxRow + 3; $row++) {
                    for ($col = $boxCol; $col < $boxCol + 3; $col++) {
                        $value = $board[$row][$col];
                        if ($value !== '.') {
                            if (!isset($hash[$value])) {
                                $hash[$value] = 1;
                            } else {
                                return false;
                            }
                        }
                    }
                }
            }
        }
        return true;
    }
}
