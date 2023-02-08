<?php

namespace App;

/**
 * Fibonacci Number
 *
 * The Fibonacci numbers, commonly denoted F(n) form a sequence, called the Fibonacci sequence, such that each number is
 * the sum of the two preceding ones, starting from 0 and 1. That is,
 * F(0) = 0, F(1) = 1, F(n) = F(n - 1) + F(n - 2), for n > 1.
 * Given n, calculate F(n).
 *
 * Example 1:
 * Input: n = 2
 * Output: 1
 * Explanation: F(2) = F(1) + F(0) = 1 + 0 = 1.
 *
 * Example 2:
 * Input: n = 3
 * Output: 2
 * Explanation: F(3) = F(2) + F(1) = 1 + 1 = 2.
 *
 * https://leetcode.com/problems/fibonacci-number
 */
class FibonacciNumber
{
    /**
     * @param int $number
     * @return int
     */
    public function fib(int $number): int
    {
        $fib = [0, 1];
        for ($i = 2; $i <= $number; $i++) {
            $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
        }
        return $fib[$number];
    }
}
