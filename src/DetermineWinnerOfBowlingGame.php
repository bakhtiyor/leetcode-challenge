<?php

namespace App;

/**
 * Determine the Winner of a Bowling Game Easy
 *
 * You are given two 0-indexed integer arrays player1 and player2, that represent the number of pins that player 1 and
 * player 2 hit in a bowling game, respectively. The bowling game consists of n turns, and the number of pins in each
 * turn is exactly 10. Assume a player hit xi pins in the ith turn. The value of the ith turn for the player is:
 *  - 2x_i if the player hit 10 pins in any of the previous two turns.
 *  - Otherwise, It is x_i
 * The score of the player is the sum of the values of their n turns.
 * Return
 *  - 1 if the score of player 1 is more than the score of player 2,
 *  - 2 if the score of player 2 is more than the score of player 1, and
 *  - 0 in case of a draw
 *
 * Example 1:
 * Input: player1 = [4,10,7,9], player2 = [6,5,2,3]
 * Output: 1
 * Explanation: The score of player1 is 4 + 10 + 2*7 + 2*9 = 46.
 * The score of player2 is 6 + 5 + 2 + 3 = 16.
 * Score of player1 is more than the score of player2, so, player1 is the winner, and the answer is 1.
 *
 * Example 2:
 * Input: player1 = [3,5,7,6], player2 = [8,10,10,2]
 * Output: 2
 * Explanation: The score of player1 is 3 + 5 + 7 + 6 = 21.
 * The score of player2 is 8 + 10 + 2*10 + 2*2 = 42.
 * Score of player2 is more than the score of player1, so, player2 is the winner, and the answer is 2.
 *
 * Example 3:
 * Input: player1 = [2,3], player2 = [4,1]
 * Output: 0
 * Explanation: The score of player1 is 2 + 3 = 5
 * The score of player2 is 4 + 1 = 5
 * The score of player1 equals to the score of player2, so, there is a draw, and the answer is 0.
 *
 * https://leetcode.com/problems/determine-the-winner-of-a-bowling-game
 */
class DetermineWinnerOfBowlingGame
{
    /**
     * @param int[] $player1
     * @param int[] $player2
     * @return int
     */
    public function isWinner(array $player1, array $player2): int
    {
        $player1Score = $this->calculateScore($player1);
        $player2Score = $this->calculateScore($player2);

        if ($player1Score > $player2Score) {
            return 1;
        }

        if ($player2Score > $player1Score) {
            return 2;
        }

        return 0;
    }

    /**
     * @param int[] $player1
     * @return int
     */
    private function calculateScore(array $player1): int
    {
        $score = 0;
        $previousTurn = 0;
        /** @var int $previousPreviousTurn */
        $previousPreviousTurn = 0;

        foreach ($player1 as $turn) {
            if ($previousPreviousTurn === 10) {
                $score += 2 * $turn;
            } elseif ($previousTurn === 10) {
                $score += 2 * $turn;
            } else {
                $score += $turn;
            }

            $previousPreviousTurn = $previousTurn;
            $previousTurn = $turn;
        }

        return $score;
    }
}
