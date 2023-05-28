<?php

namespace App;

/**
 * Divisor Game
 *
 * Alice and Bob take turns playing a game, with Alice starting first.
 * Initially, there is a number n on the chalkboard. On each player's turn, that player makes a move consisting of:
 *  - Choosing any x with 0 < x < n and n % x == 0.
 *  - Replacing the number n on the chalkboard with n - x.
 * Also, if a player cannot make a move, they lose the game.
 * Return true if and only if Alice wins the game, assuming both players play optimally.
 *
 * Example 1:
 * Input: n = 2
 * Output: true
 * Explanation: Alice chooses 1, and Bob has no more moves.
 *
 * Example 2:
 * Input: n = 3
 * Output: false
 * Explanation: Alice chooses 1, Bob chooses 1, and Alice has no more moves.
 *
 * https://leetcode.com/problems/divisor-game
 */
class DivisorGame
{
    /**
     * @param int $n
     * @return bool
     */
    public function divisorGame(int $n): bool
    {
        return $n % 2 === 0;
    }
}
