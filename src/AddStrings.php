<?php

namespace App;

/**
 * Add Strings
 *
 * Given two non-negative integers, num1 and num2 represented as string, return the sum of num1 and num2 as a string.
 * You must solve the problem without using any built-in library for handling large integers (such as BigInteger). You
 * must also not convert the inputs to integers directly.
 *
 * Example 1:
 * Input: num1 = "11", num2 = "123"
 * Output: "134"
 *
 * Example 2:
 * Input: num1 = "456", num2 = "77"
 * Output: "533"
 *
 * https://leetcode.com/problems/add-strings
 */
class AddStrings
{
    /**
     * @param string $num1
     * @param string $num2
     * @return string
     */
    public function addStrings(string $num1, string $num2): string
    {
        $num1Index = strlen($num1) - 1;
        $num2Index = strlen($num2) - 1;
        $remainder = 0;
        $result = '';
        while ($num1Index >= 0 || $num2Index >= 0) {
            $digit1 = 0;
            if ($num1Index >= 0) {
                $digit1 = (int) $num1[$num1Index];
            }
            $digit2 = 0;
            if ($num2Index >= 0) {
                $digit2 = (int) $num2[$num2Index];
            }
            $result = (($digit1 + $digit2 + $remainder) % 10) . $result;
            $remainder = (int) (($digit1 + $digit2 + $remainder) / 10);
            $num1Index--;
            $num2Index--;
        }
        if ($remainder > 0) {
            $result = $remainder . $result;
        }
        return $result;
    }
}
