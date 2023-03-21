<?php

namespace App;

/**
 * Maximum 69 Number
 *
 * You are given a positive integer num consisting only of digits 6 and 9. Return the maximum number you can get by
 * changing at most one digit (6 becomes 9, and 9 becomes 6).
 *
 * Example 1:
 * Input: num = 9669
 * Output: 9969
 * Explanation:
 * Changing the first digit results in 6669.
 * Changing the second digit results in 9969.
 * Changing the third digit results in 9699.
 * Changing the fourth digit results in 9666.
 * The maximum number is 9969.
 *
 * Example 2:
 * Input: num = 9996 Output: 9999
 *
 * Example 3:
 * Input: num = 9999 Output: 9999
 *
 * https://leetcode.com/problems/maximum-69-number
 */
class Maximum69Number
{
    /**
     * @param int $num
     * @return int
     */
    public function maximum69Number(int $num): int
    {
        // Convert the integer to a string
        $str = (string)$num;

        // Iterate through each digit of the string
        for ($i = 0, $iMax = strlen($str); $i < $iMax; $i++) {
            // If the current digit is 6, change it to 9 and return the new number
            if ($str[$i] === '6') {
                $str[$i] = '9';
                return (int) $str;
            } elseif ($str[$i] === '9') {
                continue;
            } else {
                $str[$i] = '9';
                return (int) $str;
            }
        }

        // If no digit was changed, return the original number with the last digit changed to 9
        $str[strlen($str) - 1] = '9';
        return (int) $str;
    }
}
