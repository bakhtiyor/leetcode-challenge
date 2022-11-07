<?php

namespace App;

/**
 * Reverse String
 *
 * Write a function that reverses a string. The input string is given as an array of characters s.
 * You must do this by modifying the input array in-place with O(1) extra memory.
 * Example 1:
 * Input: s = ["h","e","l","l","o"]
 * Output: ["o","l","l","e","h"]
 *
 * https://leetcode.com/problems/reverse-string
 */
class ReverseString
{
    /**
     * @param array<array-key, string> $s
     * @return void
     */
    public function reverseString(array &$s): void
    {
        $numWords = count($s);
        $middle = (int) round($numWords / 2);
        for ($i = 0; $i < $middle; $i++) {
            $tmp = $s[$i];
            $s[$i] = $s[$numWords - $i - 1];
            $s[$numWords - $i - 1] = $tmp;
        }
    }
}
