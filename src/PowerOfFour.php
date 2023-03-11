<?php

namespace App;

/**
 * Power of Four
 *
 * Given an integer n, return true if it is a power of four. Otherwise, return false.
 * An integer n is a power of four, if there exists an integer x such that n == 4x.
 *
 * Example 1:
 * Input: n = 16
 * Output: true
 *
 * Example 2:
 * Input: n = 5
 * Output: false
 *
 * Example 3:
 * Input: n = 1
 * Output: true
 *
 * https://leetcode.com/problems/power-of-four
 */
class PowerOfFour
{
    /**
     * @param int $n
     * @return bool
     */
    public function isPowerOfFour(int $n): bool
    {
        if ($n === 1) {
            return true;
        }
        $i = 0;
        while ((4 ** $i) <= $n) {
            if ((4 ** $i) === $n) {
                return true;
            }
            $i++;
        }
        return false;
    }
}
