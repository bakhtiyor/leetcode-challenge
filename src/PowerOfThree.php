<?php

namespace App;

/**
 * Power of Three
 *
 * Given an integer n, return true if it is a power of three. Otherwise, return false.
 * An integer n is a power of three, if there exists an integer x such that n == 3^x.
 *
 * Example 1:
 * Input: n = 27        Output: true            Explanation: 27 = 3^3
 * Example 2:
 * Input: n = 0         Output: false           Explanation: There is no x where 3^x = 0.
 * Example 3:
 * Input: n = -1        Output: false           Explanation: There is no x where 3^x = (-1).\
 *
 * https://leetcode.com/problems/power-of-three
 */
class PowerOfThree
{
    /**
     * @param int $number
     * @return bool
     */
    public function isPowerOfThree(int $number): bool
    {
        if ($number <= 0) {
            return false;
        }

        while ($number > 1) {
            if ($number % 3 !== 0) {
                return false;
            }
            $number = (int) ($number / 3);
        }
        return true;
    }
}
