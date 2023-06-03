<?php

namespace App;

/**
 * Calculate Amount Paid in Taxes
 *
 * You are given a 0-indexed 2D integer array brackets where brackets[i] = [upper_i, percent_i] means that the i-th tax
 * bracket has an upper bound of upper_i and is taxed at a rate of percent_i. The brackets are sorted by upper bound
 * (i.e. upper_i-1 < upper_i for 0 < i < brackets.length).
 * Tax is calculated as follows:
 * The first upper_0 dollars earned are taxed at a rate of percent_0.
 * The next upper_1 - upper_0 dollars earned are taxed at a rate of percent1.
 * The next upper_2 - upper_1 dollars earned are taxed at a rate of percent2.
 * And so on.
 * You are given an integer income representing the amount of money you earned. Return the amount of money that you have
 * to pay in taxes. Answers within 10-5 of the actual answer will be accepted.
 *
 * Example 1:
 * Input: brackets = [[3,50],[7,10],[12,25]], income = 10
 * Output: 2.65000
 * Explanation:
 * Based on your income, you have 3 dollars in the 1st tax bracket, 4 dollars in the 2nd tax bracket, and 3 dollars in
 * the 3rd tax bracket.
 * The tax rate for the three tax brackets is 50%, 10%, and 25%, respectively.
 * In total, you pay $3 * 50% + $4 * 10% + $3 * 25% = $2.65 in taxes.
 *
 * Example 2:
 * Input: brackets = [[1,0],[4,25],[5,50]], income = 2
 * Output: 0.25000
 * Explanation:
 * Based on your income, you have 1 dollar in the 1st tax bracket and 1 dollar in the 2nd tax bracket.
 * The tax rate for the two tax brackets is 0% and 25%, respectively.
 * In total, you pay $1 * 0% + $1 * 25% = $0.25 in taxes.
 *
 * Example 3:
 * Input: brackets = [[2,50]], income = 0
 * Output: 0.00000
 * Explanation:
 * You have no income to tax, so you have to pay a total of $0 in taxes.
 *
 * https://leetcode.com/problems/calculate-amount-paid-in-taxes
 */
class CalculateAmountPaidInTaxes
{
    /**
     * @param int[][] $brackets
     * @param int $income
     * @return float
     */
    public function calculateTax(array $brackets, int $income): float
    {
        $prev = 0;
        $taxes = 0;

        foreach ($brackets as $bracket) {
            if ($income <= 0) {
                break;
            }

            $diff = min(($bracket[0] - $prev), $income);

            $taxes += ($diff * ($bracket[1] / 100));

            $income -= $diff;
            $prev = $bracket[0];
        }

        return $taxes;
    }
}
