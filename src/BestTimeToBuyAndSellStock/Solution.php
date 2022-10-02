<?php

namespace App\BestTimeToBuyAndSellStock;

/**
 * You are given an array prices where prices[i] is the price of a given stock on the ith day.
 * You want to maximize your profit by choosing a single day to buy one stock and choosing a different day in the future
 * to sell that stock.
 * Return the maximum profit you can achieve from this transaction. If you cannot achieve any profit, return 0.
 *
 * Example 1:
 * Input: prices = [7,1,5,3,6,4]
 * Output: 5
 * Explanation: Buy on day 2 (price = 1) and sell on day 5 (price = 6), profit = 6-1 = 5.
 * Note that buying on day 2 and selling on day 1 is not allowed because you must buy before you sell.
 */
class Solution
{
    /**
     * @param array<int, int> $prices
     * @return int
     */
    public function maxProfit(array $prices): int
    {
        $maxProfit = 0;
        $minProfit = PHP_INT_MAX;
        $pricesLength = count($prices) - 1;
        for ($i = 0; $i <= $pricesLength; $i++) {
            if ($prices[$i] < $minProfit) {
                $minProfit = $prices[$i];
            } elseif (($prices[$i] - $minProfit) > $maxProfit) {
                $maxProfit = $prices[$i] - $minProfit;
            }
        }
        return $maxProfit;
    }
}
