<?php

namespace App;

/**
 * Numbers With Same Consecutive Differences
 *
 * Given two integers n and k, return an array of all the integers of length n where the difference between every two
 * consecutive digits is k. You may return the answer in any order.
 * Note that the integers should not have leading zeros. Integers as 02 and 043 are not allowed.
 *
 * Example 1:
 * Input: n = 3, k = 7
 * Output: [181,292,707,818,929]
 * Explanation: Note that 070 is not a valid number, because it has leading zeroes.
 *
 * Example 2:
 * Input: n = 2, k = 1
 * Output: [10,12,21,23,32,34,43,45,54,56,65,67,76,78,87,89,98]
 *
 * https://leetcode.com/problems/numbers-with-same-consecutive-differences
 */
class NumbersWithSameConsecutiveDifferencesMediumTopicsCompanies
{
    /**
     * @param int $n
     * @param int $k
     * @return int[]
     */
    public function numsSameConsecDiff(int $n, int $k): array
    {
        if ($n === 1) {
            return [1,2,3,4,5,6,7,8,9];
        }
        $result = [];
        for ($i = 1; $i <= 9; $i++) {
            $this->dfs($n - 1, $k, $i, $result);
        }
        return $result;
    }

    /**
     * @param int $n
     * @param int $k
     * @param int $curr
     * @param int[] $result
     * @return void
     */
    private function dfs(int $n, int $k, int $curr, array &$result): void
    {
        if ($n === 0) {
            $result[] = $curr;
            return;
        }
        $low = $curr % 10;
        if ($low + $k <= 9) {
            $this->dfs($n - 1, $k, $curr * 10 + ($low + $k), $result);
        } if ($low - $k >= 0 && $k !== 0) {
            $this->dfs($n - 1, $k, $curr * 10 + ($low - $k), $result);
        }
        return;
    }
}
