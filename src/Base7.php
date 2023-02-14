<?php

namespace App;

/**
 * Base 7
 *
 * Given an integer num, return a string of its base 7 representation.
 * Example 1:
 * Input: num = 100
 * Output: "202"
 *
 * Example 2:
 * Input: num = -7
 * Output: "-10"
 *
 * https://leetcode.com/problems/base-7
 */
class Base7
{
    /**
     * @param int $number
     * @return string
     */
    public function convertToBase7(int $number): string
    {
        if ($number === 0) {
            return '0';
        }
        $base7 = '';
        $isNegative = false;
        if ($number < 0) {
            $isNegative = true;
            $number *= -1;
        }
        while ($number > 0) {
            $base7 .= $number % 7;
            $number = (int) floor($number / 7);
        }

        if ($isNegative) {
            $base7 .= '-';
        }
        return strrev($base7);
    }
}
