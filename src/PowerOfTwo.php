<?php

namespace App;

/**
 * Power of Two
 *
 * Given an integer n, return true if it is a power of two. Otherwise, return false.
 * An integer n is a power of two, if there exists an integer x such that n == 2^x.
 *
 * Example 1:
 * Input: n = 1
 * Output: true
 * Explanation: 2^0 = 1
 *
 * Example 2:
 * Input: n = 16
 * Output: true
 * Explanation: 2^4 = 16
 *
 * Example 3:
 * Input: n = 3
 * Output: false
 *
 * https://leetcode.com/problems/power-of-two
 */
class PowerOfTwo
{
    /**
     * @param int $num
     * @return bool
     */
    public function isPowerOfTwo(int $num): bool
    {
        if ($num === 0) {
            return false;
        }
        while ($num % 2 === 0) {
            $num = (int) $num / 2;
        }
        return $num === 1;
    }
}
