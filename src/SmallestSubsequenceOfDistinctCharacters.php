<?php

namespace App;

/**
 * Smallest Subsequence of Distinct Characters
 *
 * Given a string s, return the lexicographically smallest subsequence of s that contains all the distinct characters
 * of s exactly once.
 *
 * Example 1:
 * Input: s = "bcabc"
 * Output: "abc"
 *
 * Example 2:
 * Input: s = "cbacdcbc"
 * Output: "acdb"
 *
 * https://leetcode.com/problems/smallest-subsequence-of-distinct-characters
 */
class SmallestSubsequenceOfDistinctCharacters
{
    /**
     * @param string $str
     * @return string
     */
    public function smallestSubsequence(string $str): string
    {
        $dict = [];
        for ($i = 0, $iMax = strlen($str); $i < $iMax; $i++) {
            $dict[$str[$i]] = $i;
        }

        $stack = [];
        for ($i = 0, $iMax = strlen($str); $i < $iMax; $i++) {
            $j = $str[$i];
            if (!in_array($j, $stack, true)) {
                while (!empty($stack) && $stack[count($stack) - 1] > $j && $dict[$stack[count($stack) - 1]] > $i) {
                    array_pop($stack);
                }

                $stack[] = $j;
            }
        }

        return implode("", $stack);
    }
}
