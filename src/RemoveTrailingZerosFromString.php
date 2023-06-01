<?php

namespace App;

/**
 * Remove Trailing Zeros From a String
 *
 * Given a positive integer num represented as a string, return the integer num without trailing zeros as a string.
 *
 * Example 1:
 * Input: num = "51230100"
 * Output: "512301"
 * Explanation: Integer "51230100" has 2 trailing zeros, we remove them and return integer "512301".
 *
 * Example 2:
 * Input: num = "123"
 * Output: "123"
 * Explanation: Integer "123" has no trailing zeros, we return integer "123".
 *
 * https://leetcode.com/problems/remove-trailing-zeros-from-a-string
 */

class RemoveTrailingZerosFromString
{
    /**
     * @param string $num
     * @return string
     */
    public function removeTrailingZeros(string $num): string
    {
        $num = ltrim($num, '0');
        $num = rtrim($num, '0');

        return $num;
    }
}
