<?php

namespace App;

/**
 * Find Winner on a Tic Tac Toe Game
 *
 * Tic-tac-toe is played by two players A and B on a 3 x 3 grid. The rules of Tic-Tac-Toe are:
 * - Players take turns placing characters into empty squares ' '.
 * - The first player A always places 'X' characters, while the second player B always places 'O' characters.
 * - 'X' and 'O' characters are always placed into empty squares, never on filled ones.
 * - The game ends when there are three of the same (non-empty) character filling any row, column, or diagonal.
 * - The game also ends if all squares are non-empty.
 * - No more moves can be played if the game is over.
 * Given a 2D integer array moves where moves[i] = [row_i, col_i] indicates that the ith move will be played on
 * grid[row_i][col_i]. Return the winner of the game if it exists (A or B). In case the game ends in a draw return
 * "Draw". If there are still movements to play return "Pending". You can assume that moves is valid (i.e., it follows
 * the rules of Tic-Tac-Toe), the grid is initially empty, and A will play first.
 *
 * Example 1:
 *
 * Input: moves = [[0,0],[2,0],[1,1],[2,1],[2,2]]
 * Output: "A"
 * Explanation: A wins, they always play first.
 *
 * Example 2:
 *
 * Input: moves = [[0,0],[1,1],[0,1],[0,2],[1,0],[2,0]]
 * Output: "B"
 * Explanation: B wins.
 *
 * https://leetcode.com/problems/find-winner-on-a-tic-tac-toe-game
 */
class FindWinnerOnTicTacToeGame
{
    /**
     * @param array<array-key, int> $moves
     * @return string
     */
    public function tictactoe(array $moves): string
    {
        $ticTacToeSize = 3;
        $rows = [0, 0, 0];
        $cols = [0, 0, 0];
        $diag1 = 0;
        $diag2 = 0;
        $player = 1;
        /** @var array<array-key, int> $move */
        foreach ($moves as $move) {
            $row = $move[0];
            $col = $move[1];
            $rows[$row] += $player;
            $cols[$col] += $player;
            if ($row === $col) {
                $diag1 += $player;
            }
            if ($row + $col == $ticTacToeSize - 1) {
                $diag2 += $player;
            }
            if (
                abs($rows[$row]) === $ticTacToeSize ||
                abs($cols[$col]) === $ticTacToeSize ||
                abs($diag1) === $ticTacToeSize ||
                abs($diag2) === $ticTacToeSize
            ) {
                if ($player === 1) {
                    return 'A';
                } else {
                    return 'B';
                }
            }
            $player = $player * -1;
        }
        if (count($moves) === $ticTacToeSize * $ticTacToeSize) {
            return 'Draw';
        } else {
            return 'Pending';
        }
    }
}
