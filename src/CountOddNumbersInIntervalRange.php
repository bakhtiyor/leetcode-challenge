<?php

namespace App;

/**
 * Count Odd Numbers in an Interval Range
 *
 * Given two non-negative integers low and high. Return the count of odd numbers between low and high (inclusive).
 *
 * Example 1:
 * Input: low = 3, high = 7
 * Output: 3
 * Explanation: The odd numbers between 3 and 7 are [3,5,7].
 *
 * Example 2:
 * Input: low = 8, high = 10
 * Output: 1
 * Explanation: The odd numbers between 8 and 10 are [9].
 *
 * https://leetcode.com/problems/count-odd-numbers-in-an-interval-range
 */
class CountOddNumbersInIntervalRange
{
    /**
     * @param int $low
     * @param int $high
     * @return int
     */
    public function countOdds(int $low, int $high): int
    {
        $oddNums = 0;
        $delta = $high - $low;
        if ($low % 2 === 1) {
            $oddNums++;
        }
        if ($high % 2 === 1) {
            $oddNums++;
        }
        return (int) (($delta + $oddNums) / 2);
    }
}
