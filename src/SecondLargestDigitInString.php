<?php

namespace App;

/**
 * Second-Largest Digit in a String
 *
 * Given an alphanumeric string s, return the second-largest numerical digit that appears in s, or -1 if it does not
 * exist. An alphanumeric string is a string consisting of lowercase English letters and digits.
 *
 * Example 1:
 * Input: s = "dfa12321afd"
 * Output: 2
 * Explanation: The digits that appear in s are [1, 2, 3]. The second largest digit is 2.
 *
 * Example 2:
 * Input: s = "abc1111"
 * Output: -1
 * Explanation: The digits that appear in s are [1]. There is no second largest digit.
 *
 * https://leetcode.com/problems/second-largest-digit-in-a-string
 */
class SecondLargestDigitInString
{
    /**
     * @param string $str
     * @return int
     */
    public function secondHighest(string $str): int
    {
        $digits = [];
        $max = PHP_INT_MIN;
        for ($i = 0, $iMax = strlen($str); $i < $iMax; $i++) {
            if (is_numeric($str[$i])) {
                $digits[] = $str[$i];
                if ($max < $str[$i]) {
                    $max = $str[$i];
                }
            }
        }
        if (count($digits) < 2) {
            return -1;
        }
        $secondMax = -1;
        foreach ($digits as $digit) {
            if ($digit > $secondMax && $digit < $max) {
                $secondMax = $digit;
            }
        }
        return $secondMax;
    }
}