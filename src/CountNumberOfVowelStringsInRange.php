<?php

namespace App;

/**
 * Count the Number of Vowel Strings in Range
 *
 * You are given a 0-indexed array of string words and two integers left and right. A string is called a vowel string if
 * it starts with a vowel character and ends with a vowel character where vowel characters are 'a', 'e', 'i', 'o',
 * and 'u'. Return the number of vowel strings words[i] where i belongs to the inclusive range [left, right].
 *
 * Example 1:
 * Input: words = ["are","amy","u"], left = 0, right = 2
 * Output: 2
 * Explanation:
 * - "are" is a vowel string because it starts with 'a' and ends with 'e'.
 * - "amy" is not a vowel string because it does not end with a vowel.
 * - "u" is a vowel string because it starts with 'u' and ends with 'u'.
 * The number of vowel strings in the mentioned range is 2.
 *
 * Example 2:
 * Input: words = ["hey","aeo","mu","ooo","artro"], left = 1, right = 4
 * Output: 3
 * Explanation:
 * - "aeo" is a vowel string because it starts with 'a' and ends with 'o'.
 * - "mu" is not a vowel string because it does not start with a vowel.
 * - "ooo" is a vowel string because it starts with 'o' and ends with 'o'.
 * - "artro" is a vowel string because it starts with 'a' and ends with 'o'.
 * The number of vowel strings in the mentioned range is 3.
 *
 * https://leetcode.com/problems/count-the-number-of-vowel-strings-in-range
 */
class CountNumberOfVowelStringsInRange
{
    /**
     * @param string[] $words
     * @param int $left
     * @param int $right
     * @return int
     */
    public function vowelStrings(array $words, int $left, int $right): int
    {
        $count = 0;
        $vowels = ['a', 'e', 'i', 'o', 'u'];
        for ($i = $left; $i <= $right; $i++) {
            if (in_array($words[$i][0], $vowels) && in_array($words[$i][strlen($words[$i]) - 1], $vowels)) {
                $count++;
            }
        }

        return $count;
    }
}
