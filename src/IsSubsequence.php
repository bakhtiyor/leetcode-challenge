<?php

namespace App;

/**
 * Is Subsequence
 *
 * Given two strings s and t, return true if s is a subsequence of t, or false otherwise.
 * A subsequence of a string is a new string that is formed from the original string by deleting some (can be none)
 * of the characters without disturbing the relative positions of the remaining characters. (i.e., "ace" is a
 * subsequence of "abcde" while "aec" is not).
 *
 * Example 1:
 * Input: s = "abc", t = "ahbgdc"
 * Output: true
 *
 * Example 2:
 * Input: s = "axc", t = "ahbgdc"
 * Output: false
 *
 * https://leetcode.com/problems/is-subsequence
 */
class IsSubsequence
{
    /**
     * @param string $s
     * @param string $t
     * @return bool
     */
    public function isSubsequence(string $s, string $t): bool
    {
        $i = 0;
        $j = 0;
        $sArr = str_split($s);
        $tArr = str_split($t);
        while ($i < strlen($s) && $j < strlen($t)) {
            if ($sArr[$i] === $tArr[$j]) {
                $i++;
            }
            $j++;
        }
        return $i === strlen($s);
    }
}
