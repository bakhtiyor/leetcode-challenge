<?php

namespace App;

/**
 * Three Divisors
 *
 * Given an integer n, return true if n has exactly three positive divisors. Otherwise, return false.
 * An integer m is a divisor of n if there exists an integer k such that n = k * m.
 *
 * Example 1:
 * Input: n = 2
 * Output: false
 * Explanation: 2 has only two divisors: 1 and 2.
 *
 * Example 2:
 * Input: n = 4
 * Output: true
 * Explanation: 4 has three divisors: 1, 2, and 4.
 *
 * https://leetcode.com/problems/three-divisors
 */
class ThreeDivisors
{
    /**
     * @param int $number
     * @return bool
     */
    public function isThree(int $number): bool
    {
        $divisors = 0;
        for ($i = 1; $i <= $number; $i++) {
            if ($number % $i === 0) {
                $divisors++;
            }
        }
        return $divisors === 3;
    }
}
