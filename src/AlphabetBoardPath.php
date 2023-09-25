<?php

namespace App;

/**
 * Alphabet Board Path
 *
 * On an alphabet board, we start at position (0, 0), corresponding to character board[0][0].
 * Here, board = ["abcde", "fghij", "klmno", "pqrst", "uvwxy", "z"], as shown in the diagram below.
 * We may make the following moves:
 *  - 'U' moves our position up one row, if the position exists on the board;
 *  - 'D' moves our position down one row, if the position exists on the board;
 *  - 'L' moves our position left one column, if the position exists on the board;
 *  - 'R' moves our position right one column, if the position exists on the board;
 *  - '!' adds the character board[r][c] at our current position (r, c) to the answer.
 * (Here, the only positions that exist on the board are positions with letters on them.)
 * Return a sequence of moves that makes our answer equal to target in the minimum number of moves.  You may return any
 * path that does so.
 *
 * Example 1:
 * Input: target = "leet"
 * Output: "DDR!UURRR!!DDD!"
 *
 * Example 2:
 * Input: target = "code"
 * Output: "RR!DDRR!UUL!R!"
 *
 * https://leetcode.com/problems/alphabet-board-path
 */
class AlphabetBoardPath
{
    public const MAPPING = [
        'a' => [0, 0], 'b' => [0, 1], 'c' => [0, 2], 'd' => [0, 3], 'e' => [0, 4],
        'f' => [1, 0], 'g' => [1, 1], 'h' => [1, 2], 'i' => [1, 3], 'j' => [1, 4],
        'k' => [2, 0], 'l' => [2, 1], 'm' => [2, 2], 'n' => [2, 3], 'o' => [2, 4],
        'p' => [3, 0], 'q' => [3, 1], 'r' => [3, 2], 's' => [3, 3], 't' => [3, 4],
        'u' => [4, 0], 'v' => [4, 1], 'w' => [4, 2], 'x' => [4, 3], 'y' => [4, 4],
        'z' => [5, 0]
    ];

    /**
     * @param string $target
     * @return string
     */
    public function alphabetBoardPath(string $target): string
    {
        $x = 0;
        $y = 0;
        $path = '';

        for ($i = 0, $iMax = strlen($target); $i < $iMax; $i++) {
            $c = $target[$i];
            [$n_x, $n_y] = self::MAPPING[$c];

            if ($n_y < $y) {
                $path .= str_repeat('L', $y - $n_y);
            }
            if ($n_x < $x) {
                $path .= str_repeat('U', $x - $n_x);
            }
            if ($n_x > $x) {
                $path .= str_repeat('D', $n_x - $x);
            }
            if ($n_y > $y) {
                $path .= str_repeat('R', $n_y - $y);
            }

            $path .= '!';
            $x = $n_x;
            $y = $n_y;
        }

        return $path;
    }
}
