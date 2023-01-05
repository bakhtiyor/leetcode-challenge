<?php

namespace App;

/**
 * Coin Change
 *
 * You are given an integer array coins representing coins of different denominations and an integer amount representing
 * a total amount of money. Return the fewest number of coins that you need to make up that amount. If that amount of
 * money cannot be made up by any combination of the coins, return -1. You may assume that you have an infinite number
 * of each kind of coin.
 *
 * Example 1:
 * Input: coins = [1,2,5], amount = 11
 * Output: 3
 * Explanation: 11 = 5 + 5 + 1
 *
 * Example 2:
 * Input: coins = [2], amount = 3
 * Output: -1
 *
 * Example 3:
 * Input: coins = [1], amount = 0
 * Output: 0
 *
 * https://leetcode.com/problems/coin-change
 */
class CoinChange
{
    /**
     * @param array<array-key, int> $coins
     * @param int $amount
     * @return int
     */
    public function coinChange(array $coins, int $amount): int
    {
        $numCoins = count($coins);
        $max = $amount + 1;
        $dp = array_fill(0, $max, $max);
        $dp[0] = 0;
        for ($i = 1; $i <= $amount; $i++) {
            for ($j = 0; $j < $numCoins; $j++) {
                if ($coins[$j] <= $i) {
                    $dp[$i] = min($dp[$i], $dp[$i - $coins[$j]] + 1);
                }
            }
        }
        return $dp[$amount] > $amount ? -1 : $dp[$amount];
    }
}
