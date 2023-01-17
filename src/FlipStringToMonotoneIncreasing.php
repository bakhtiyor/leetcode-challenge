<?php

namespace App;

/**
 * Flip String to Monotone Increasing
 *
 * A binary string is monotone increasing if it consists of some number of 0's (possibly none), followed by some number
 * of 1's (also possibly none). You are given a binary string s. You can flip s[i] changing it from 0 to 1 or from
 * 1 to 0. Return the minimum number of flips to make s monotone increasing.
 *
 * Example 1:
 * Input: s = "00110"
 * Output: 1
 * Explanation: We flip the last digit to get 00111.
 *
 * Example 2:
 * Input: s = "010110"
 * Output: 2
 * Explanation: We flip to get 011111, or alternatively 000111.
 *
 * https://leetcode.com/problems/flip-string-to-monotone-increasing
 */
class FlipStringToMonotoneIncreasing
{
    /**
     * @param string $str
     * @return int
     */
    public function minFlipsMonoIncr(string $str): int
    {
        $totalZero = 0;
        for ($i = 0, $iMax = strlen($str); $i < $iMax; $i++) {
            if ($str[$i] === '0') {
                $totalZero++;
            }
        }
        $answer = $totalZero;
        for ($i = 0, $iMax = strlen($str); $i < $iMax; $i++) {
            if ($str[$i] === '0') {
                $totalZero--;
                $answer = min($totalZero, $answer);
            } else {
                $totalZero++;
            }
        }
        return $answer;
    }
}