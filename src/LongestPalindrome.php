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
        $maxLength = 0;
        foreach ($strArr as $index => $word) {
            $wordPairIndex = $this->searchWord($word, $strArr, $index);
            if ($wordPairIndex >= 0) {
                $maxLength += 2;
                unset($strArr[$wordPairIndex]);
            }
            unset($strArr[$index]);
        }
        return $maxLength;
    }

    private function searchWord(string $word, array $strArr, int $expceptionIndex): int
    {
        foreach ($strArr as $index => $value) {
            if ($index !== $expceptionIndex && $word === $value) {
                return $index;
            }
        }
        return -1;
    }
}
