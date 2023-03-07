<?php

namespace App;

/**
 * Convert a Number to Hexadecimal
 *
 * Given an integer num, return a string representing its hexadecimal representation. For negative integers, two’s
 * complement method is used. All the letters in the answer string should be lowercase characters, and there should not
 * be any leading zeros in the answer except for the zero itself.
 * Note: You are not allowed to use any built-in library method to directly solve this problem.
 *
 * Example 1:
 * Input: num = 26
 * Output: "1a"
 *
 * Example 2:
 * Input: num = -1
 * Output: "ffffffff"
 *
 * https://leetcode.com/problems/convert-a-number-to-hexadecimal
 */
class ConvertNumberToHexadecimal
{
    /**
     * @param int $number
     * @return string
     */
    public function toHex(int $number): string
    {
        if ($number === 0) {
            return '0';
        }

        // exception for negative numbers
        if ($number < 0) {
            $number = $number + 2 ** 32;
        }

        $hexadecimal = '';
        while ($number > 0) {
            $remainder = $number % 16;
            $hexadecimal = $this->getHexOfDigit($remainder) . $hexadecimal;
            $number = (int) ($number / 16);
        }

        return $hexadecimal;
    }

    /**
     * Returns the hexadecimal representation of a digit
     *
     * @param int $digit
     * @return string
     */
    private function getHexOfDigit(int $digit): string
    {
        if ($digit < 10) {
            return (string) $digit;
        }

        return chr($digit + 87);
    }
}
