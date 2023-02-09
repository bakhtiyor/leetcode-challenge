<?php

namespace App;

/**
 * Perfect Number
 *
 * A perfect number is a positive integer that is equal to the sum of its positive divisors, excluding the number
 * itself. A divisor of an integer x is an integer that can divide x evenly. Given an integer n, return true if n is
 * a perfect number, otherwise return false.
 *
 * Example 1:
 * Input: num = 28
 * Output: true
 * Explanation: 28 = 1 + 2 + 4 + 7 + 14
 * 1, 2, 4, 7, and 14 are all divisors of 28.
 *
 * Example 2:
 * Input: num = 7
 * Output: false
 *
 * https://leetcode.com/problems/perfect-number
 */
class PerfectNumber
{
    /**
     * @param int $number
     * @return bool
     */
    public function checkPerfectNumber(int $number): bool
    {
        if ($number === 1) {
            return false;
        }
        $sum = 1;
        $limit = sqrt($number);
        for ($i = 2; $i <= $limit; $i++) {
            if ($number % $i === 0) {
                $sum += $i;
                if ($i * $i !== $number) {
                    $sum += $number / $i;
                }
            }
        }
        return $sum === $number;
    }
}
