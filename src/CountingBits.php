<?php

namespace App;

/**
 * Counting Bits
 *
 * Given an integer n, return an array ans of length n + 1 such that for each i (0 <= i <= n), ans[i] is the number of
 * 1's in the binary representation of i.
 *
 * Example 1:
 * Input: n = 5
 * Output: [0,1,1,2,1,2]
 * Explanation:
 * 0 --> 0
 * 1 --> 1
 * 2 --> 10
 * 3 --> 11
 * 4 --> 100
 * 5 --> 101
 *
 * https://leetcode.com/problems/counting-bits
 */
class CountingBits
{
    /**
     * @param int $number
     * @return array<array-key, int>
     */
    public function countBits(int $number): array
    {
        $result = [];
        for ($i = 0; $i <= $number; $i++) {
            $binary = decbin($i);
            $result[] = substr_count($binary, '1');
        }
        return $result;
    }
}
