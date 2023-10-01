<?php

namespace App;

/**
 * Best Time to Buy and Sell Stock with Cooldown
 *
 * You are given an array prices where prices[i] is the price of a given stock on the ith day. Find the maximum profit
 * you can achieve. You may complete as many transactions as you like (i.e., buy one and sell one share of the stock
 * multiple times) with the following restrictions: After you sell your stock, you cannot buy stock on the next day
 * (i.e., cooldown one day). Note: You may not engage in multiple transactions simultaneously (i.e., you must sell the
 * stock before you buy again).
 *
 * Example 1:
 * Input: prices = [1,2,3,0,2]
 * Output: 3
 * Explanation: transactions = [buy, sell, cooldown, buy, sell]
 *
 * Example 2:
 * Input: prices = [1]
 * Output: 0
 *
 * https://leetcode.com/problems/best-time-to-buy-and-sell-stock-with-cooldown
 */
class BestTimeToBuyAndSellStockWithCooldown
{
    /**
     * @param int[] $prices
     * @return int
     */
    public function maxProfit(array $prices): int
    {
        $hold = -INF;
        $sold = 0;
        $rest = 0;
        foreach ($prices as $iValue) {
            $nextHold = max($hold, $rest - $iValue);
            $nextSold = $hold + $iValue;
            $nextRest = max($rest, $sold);
            $hold = $nextHold;
            $sold = $nextSold;
            $rest = $nextRest;
        }
        return (int) (max($sold, $rest));
    }
}
