<?php

namespace App;

/**
 * Alternating Digit Sum
 *
 * You are given a positive integer n. Each digit of n has a sign according to the following rules:
 * - The most significant digit is assigned a positive sign.
 * - Each other digit has an opposite sign to its adjacent digits.
 * Return the sum of all digits with their corresponding sign.
 *
 * Example 1:
 * Input: n = 521
 * Output: 4
 * Explanation: (+5) + (-2) + (+1) = 4.
 *
 * Example 2:
 * Input: n = 111
 * Output: 1
 * Explanation: (+1) + (-1) + (+1) = 1.
 *
 * Example 3:
 * Input: n = 886996
 * Output: 0
 * Explanation: (+8) + (-8) + (+6) + (-9) + (+9) + (-6) = 0.
 *
 * https://leetcode.com/problems/alternating-digit-sum
 */
class AlternatingDigitSum
{
    /**
     * @param int $number
     * @return int
     */
    public function alternateDigitSum(int $number): int
    {
        $sum = 0;
        $digits = $this->numberToDigits($number);
        /** @var int $index */
        foreach ($digits as $index => $digit) {
            $sum += $index % 2 === 0 ? $digit : -$digit;
        }

        return $sum;
    }

    /**
     * Returns an array of digits of a number
     * @param int $number
     * @return int[]
     */
    private function numberToDigits(int $number): array
    {
        $digits = [];
        while ($number > 0) {
            $digits[] = $number % 10;
            $number = (int)($number / 10);
        }
        return array_reverse($digits);
    }
}
