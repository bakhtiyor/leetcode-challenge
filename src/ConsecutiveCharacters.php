<?php

namespace App;

/**
 * Consecutive Characters
 *
 * The power of the string is the maximum length of a non-empty substring that contains only one unique character.
 * Given a string s, return the power of s.
 *
 * Example 1:
 * Input: s = "leetcode"
 * Output: 2
 * Explanation: The substring "ee" is of length 2 with the character 'e' only.
 *
 * Example 2:
 * Input: s = "abbcccddddeeeeedcba"
 * Output: 5
 * Explanation: The substring "eeeee" is of length 5 with the character 'e' only.
 *
 * https://leetcode.com/problems/consecutive-characters
 */
class ConsecutiveCharacters
{
    /**
     * @param string $str
     * @return int
     */
    public function maxPower(string $str): int
    {
        $max = 0;
        $current = 0;
        $previous = null;

        foreach (str_split($str) as $char) {
            if ($char === $previous) {
                $current++;
            } else {
                $max = max($max, $current);
                $current = 1;
            }

            $previous = $char;
        }
        return max($max, $current);
    }
}
