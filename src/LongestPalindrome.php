<?php

namespace App;

/**
 * Longest Palindrome
 *
 * Given a string s which consists of lowercase or uppercase letters, return the length of the longest palindrome that
 * can be built with those letters. Letters are case-sensitive, for example, "Aa" is not considered a palindrome here.
 *
 * Example 1:
 * Input: s = "abccccdd"
 * Output: 7
 * Explanation: One longest palindrome that can be built is "dccaccd", whose length is 7.
 *
 * Example 2:
 * Input: s = "a"
 * Output: 1
 * Explanation: The longest palindrome that can be built is "a", whose length is 1.
 *
 * https://leetcode.com/problems/longest-palindrome
 */
class LongestPalindrome
{
    /**
     * @param string $str
     * @return int
     */
    public function longestPalindrome(string $str): int
    {
        $strArr = str_split($str);
        $strHash = [];
        $result = 0;
        for ($i = 0, $iMax = count($strArr); $i < $iMax; $i++) {
            $word = $strArr[$i];
            if (!isset($strHash[$word])) {
                $strHash[$word] = 1;
            } else {
                $strHash[$word] = null;
                $result += 2;
            }
        }
        if (count($strArr) > $result) {
            $result++;
        }
        return $result;
    }
}
