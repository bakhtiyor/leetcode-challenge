<?php

namespace App;

/**
 * Valid Perfect Square
 *
 * Given a positive integer num, write a function which returns True if num is a perfect square else False.
 * Follow up: Do not use any built-in library function such as sqrt.
 *
 * Example 1:
 * Input: num = 16      Output: true
 *
 * Example 2:
 * Input: num = 14      Output: false
 *
 * https://leetcode.com/problems/valid-perfect-square
 */
class ValidPerfectSquare
{
    /**
     * @param int $number
     * @return bool
     */
    public function isPerfectSquare(int $number): bool
    {
        $left = 1;
        $right = $number;
        while ($left <= $right) {
            $mid = (int) (round($left + $right) / 2);
            if ($mid * $mid > $number) {
                $right = $mid - 1;
            } elseif ($mid * $mid < $number) {
                $left = $mid + 1;
            } else {
                return true;
            }
        }
        return false;
    }
}
