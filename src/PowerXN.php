<?php

namespace App;

/**
 * Pow(x, n)
 *
 * Implement pow(x, n), which calculates x raised to the power n (i.e., x^n).
 *
 * Example 1:
 * Input: x = 2.00000, n = 10 Output: 1024.00000
 * Example 2:
 * Input: x = 2.10000, n = 3 Output: 9.26100
 * Example 3:
 * Input: x = 2.00000, n = -2 Output: 0.25000 Explanation: 2-2 = 1/22 = 1/4 = 0.25
 *
 * https://leetcode.com/problems/powx-n
 */
class PowerXN
{
    /**
     * @param float $x
     * @param int $n
     * @return float
     */
    public function myPow(float $x, int $n): float
    {
        if ($n < 0) {
            $n = -$n;
            $x = 1 / $x;
        }
        $result = 1;
        while ($n !== 0) {
            if ($n % 2 !== 0) {
                $result *= $x;
            }
            $x *= $x;
            $n = (int)($n / 2);
        }
        return round($result, 5);
    }
}
