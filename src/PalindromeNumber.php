<?php

namespace App;

/**
 * Palindrome Number
 *
 * Given an integer x, return true if x is palindrome integer.
 * An integer is a palindrome when it reads the same backward as forward.
 *
 * For example, 121 is a palindrome while 123 is not.
 *
 * https://leetcode.com/problems/palindrome-number/
 */
class PalindromeNumber
{
    /**
     * @param int $x
     * @return bool
     */
    public function isPalindrome(int $x): bool
    {
        if ($x < 0) {
            return false;
        }
        $digits = [];
        while ($x > 0) {
            $remainder = $x % 10;
            $x = (int)($x / 10);
            $digits[] = $remainder;
        }

        $numOfDigits = count($digits);
        for ($i = 0; $i < $numOfDigits / 2; $i++) {
            $digit1 = $digits[$i];
            $digit2 = $digits[$numOfDigits - $i - 1];

            if ($digit1 !== $digit2) {
                return false;
            }
        }
        return true;
    }
}
