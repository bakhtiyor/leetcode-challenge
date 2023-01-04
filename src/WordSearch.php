<?php

namespace App;

/**
 * Word Search
 *
 * Given an m x n grid of characters board and a string word, return true if word exists in the grid. The word can be
 * constructed from letters of sequentially adjacent cells, where adjacent cells are horizontally or vertically
 * neighboring. The same letter cell may not be used more than once.
 *
 * Example 1:
 * Input: board = [
 * ["A","B","C","E"],
 * ["S","F","C","S"],
 * ["A","D","E","E"]
 * ], word = "ABCCED"
 * Output: true
 *
 * Example 2:
 * Input: board = [
 * ["A","B","C","E"],
 * ["S","F","C","S"],
 * ["A","D","E","E"]
 * ], word = "ABCB"
 * Output: false
 *
 * https://leetcode.com/problems/word-search
 */
class WordSearch
{
    private int $numRows = 0;
    private int $numCols = 0;
    /** @var array<array-key, array<array-key, string>>  */
    private array $board = [];
    private string $word = '';
    /**
     * @param array<array-key, array<array-key, string>> $board
     * @param string $word
     * @return bool
     */
    public function exist(array $board, string $word): bool
    {
        $this->numRows = count($board);
        $this->numCols = count($board[0]);
        $this->word = $word;
        $this->board = $board;

        for ($row = 0; $row < $this->numRows; $row++) {
            for ($col = 0; $col < $this->numCols; $col++) {
                if ($board[$row][$col] === $word[0] && $this->dfs($row, $col, 0)) {
                    return true;
                }
            }
        }
        return false;
    }

    /**
     * @param int $row
     * @param int $col
     * @param int $index
     * @return bool
     */
    private function dfs(int $row, int $col, int $index): bool
    {
        if ($index === strlen($this->word)) {
            return true;
        }
        if (
            $row < 0 || $row >= $this->numRows ||
            $col < 0 || $col >= $this->numCols ||
            $this->word[$index] !== $this->board[$row][$col]
        ) {
            return false;
        }

        $temp = $this->board[$row][$col];
        $this->board[$row][$col] = ' ';
        $found = (
            $this->dfs($row + 1, $col, $index + 1) ||
            $this->dfs($row - 1, $col, $index + 1) ||
            $this->dfs($row, $col + 1, $index + 1) ||
            $this->dfs($row, $col - 1, $index + 1)
        );
        $this->board[$row][$col] = $temp;
        return $found;
    }
}
