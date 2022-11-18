<?php

namespace App;

/**
 * Ugly Number
 *
 * An ugly number is a positive integer whose prime factors are limited to 2, 3, and 5.
 * Given an integer n, return true if n is an ugly number.
 * Example 1:
 * Input: n = 6             Output: true        Explanation: 6 = 2 × 3
 * Example 2:
 * Input: n = 1             Output: true        Explanation: 1 has no prime factors, therefore all of its prime factors
 * are limited to 2, 3, and 5.
 * Example 3:
 * Input: n = 14            Output: false       Explanation: 14 is not ugly since it includes the prime factor 7.
 *
 * https://leetcode.com/problems/ugly-number
 */
class UglyNumber
{
    /**
     * @param int $number
     * @return bool
     */
    public function isUgly(int $number): bool
    {
        if ($number === 1) {
            return true;
        }
        if ($number <= 0) {
            return false;
        }
        while ($number > 1) {
            $primeFactor = $this->getPrimeFactor($number);
            if ($primeFactor === 0) {
                return false;
            }
            $number = (int) ($number / $primeFactor);
        }
        return true;
    }

    /**
     * @param int $number
     * @return int
     */
    private function getPrimeFactor(int $number): int
    {
        $primeFactors = [2, 3, 5];
        foreach ($primeFactors as $primeFactor) {
            if ($number % $primeFactor === 0) {
                return $primeFactor;
            }
        }
        return 0;
    }
}
