<?php

namespace App;

/**
 * Add Digits
 *
 * Given an integer num, repeatedly add all its digits until the result has only one digit, and return it.
 * Example 1:
 * Input: num = 38
 * Output: 2
 * Explanation: The process is
 * 38 --> 3 + 8 --> 11
 * 11 --> 1 + 1 --> 2
 * Since 2 has only one digit, return it.
 *
 * https://leetcode.com/problems/add-digits
 */
class AddDigits
{
    /**
     * @param int $num
     * @return int
     */
    public function addDigits(int $num): int
    {
        while ($num >= 10) {
            $num = $this->getSumOfDigits($num);
        }
        return $num;
    }

    /**
     * @param int $number
     * @return int
     */
    private function getSumOfDigits(int $number): int
    {
        $sum = 0;
        while ($number > 0) {
            $remainder = $number % 10;
            $number = (int)($number / 10);
            $sum += $remainder;
        }
        return $sum;
    }
}
