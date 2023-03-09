<?php

namespace App;

/**
 * Rotate String
 *
 * Given two strings s and goal, return true if and only if s can become goal after some number of shifts on s.
 * A shift on s consists of moving the leftmost character of s to the rightmost position.
 * For example, if s = "abcde", then it will be "bcdea" after one shift.
 *
 * Example 1:
 * Input: s = "abcde", goal = "cdeab"
 * Output: true
 *
 * Example 2:
 * Input: s = "abcde", goal = "abced"
 * Output: false
 *
 * https://leetcode.com/problems/rotate-string
 */
class RotateString
{
    /**
     * @param string $str
     * @param string $goal
     * @return bool
     */
    public function rotateString(string $str, string $goal): bool
    {
        if ($str === $goal) {
            return true;
        }
        for ($i = 0, $iMax = strlen($str); $i < $iMax; $i++) {
            $newStr = substr($str, $i + 1) . substr($str, 0, $i + 1);
            if ($newStr === $goal) {
                return true;
            }
        }
        return false;
    }
}
