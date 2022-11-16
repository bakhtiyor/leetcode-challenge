<?php

namespace App;

use App\library\NumberGenerator;

/**
 * Guess Number Higher or Lower
 *
 * We are playing the Guess Game. The game is as follows:
 * I pick a number from 1 to n. You have to guess which number I picked.
 * Every time you guess wrong, I will tell you whether the number I picked is higher or lower than your guess.
 * You call a pre-defined API int guess(int num), which returns three possible results:
 * -1: Your guess is higher than the number I picked (i.e. num > pick).
 * 1: Your guess is lower than the number I picked (i.e. num < pick).
 * 0: your guess is equal to the number I picked (i.e. num == pick).
 * * Return the number that I picked.
 *
 * Example 1:
 * Input: n = 10, pick = 6          Output: 6
 *
 * Example 2:
 * Input: n = 1, pick = 1           Output: 1
 *
 * Example 3:
 * Input: n = 2, pick = 1           Output: 1
 *
 * https://leetcode.com/problems/guess-number-higher-or-lower
 */
class GuessNumber extends NumberGenerator
{
    /**
     * @param int $n
     * @return int
     */
    public function guessNumber(int $n): int
    {
        $left = 0;
        $right = $n;
        $myGuess = (int) round(($right - $left) / 2);
        $guessCheck = $this->guess($myGuess);
        while ($guessCheck !== 0) {
            if ($guessCheck === 1) {
                $left = $myGuess;
            } else {
                $right = $myGuess;
            }
            $myGuess = $left + (int) round(($right - $left) / 2);
            $guessCheck = $this->guess($myGuess);
        }
        return $myGuess;
    }
}
