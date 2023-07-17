<?php

namespace App;

/**
 * Word Pattern
 *
 * Given a pattern and a string s, find if s follows the same pattern. Here follow means a full match, such that there
 * is a bijection between a letter in pattern and a non-empty word in s.
 *
 * Example 1:
 * Input: pattern = "abba", s = "dog cat cat dog"
 * Output: true
 *
 * Example 2:
 * Input: pattern = "abba", s = "dog cat cat fish"
 * Output: false
 *
 * Example 3:
 * Input: pattern = "aaaa", s = "dog cat cat dog"
 * Output: false
 *
 * https://leetcode.com/problems/word-pattern
 */
class WordPattern
{
    /**
     * @param string $pattern
     * @param string $str
     * @return bool
     */
    public function wordPattern(string $pattern, string $str): bool
    {
        $words = explode(' ', $str);
        $patternChars = str_split($pattern);

        if (count($words) !== count($patternChars)) {
            return false;
        }

        $patternMap = [];
        $wordMap = [];

        foreach ($patternChars as $index => $patternChar) {
            $word = $words[$index];

            if (isset($patternMap[$patternChar]) && $patternMap[$patternChar] !== $word) {
                return false;
            }

            if (isset($wordMap[$word]) && $wordMap[$word] !== $patternChar) {
                return false;
            }

            $patternMap[$patternChar] = $word;
            $wordMap[$word] = $patternChar;
        }

        return true;
    }
}
