<?php

namespace App;

/**
 * Longest Substring Without Repeating Characters
 *
 * Given a string s, find the length of the longest substring without repeating characters.
 * Example 1:
 * Input: s = "abcabcbb" Output: 3 Explanation: The answer is "abc", with the length of 3.
 * Example 2:
 * Input: s = "bbbbb"  Output: 1  Explanation: The answer is "b", with the length of 1.
 *
 * https://leetcode.com/problems/longest-substring-without-repeating-characters
 */
class LongestSubstringWithoutRepeatingCharacters
{
    /**
     * @param string $str
     * @return int
     */
    public function lengthOfLongestSubstring(string $str): int
    {
        $chars = [];
        $left = 0;
        $right = 0;
        $result = 0;
        $length = strlen($str);

        while ($right < $length) {
            $rightChar = $str[$right];
            if (isset($chars[$rightChar])) {
                $chars[$rightChar]++;
            } else {
                $chars[$rightChar] = 1;
            }

            while ($chars[$rightChar] > 1) {
                $leftChar = $str[$left];
                if (isset($chars[$leftChar])) {
                    $chars[$leftChar]--;
                } else {
                    $chars[$leftChar] = 1;
                }
                $left++;
            }

            $result = max($result, $right - $left + 1);

            $right++;
        }

        return $result;
    }
}
