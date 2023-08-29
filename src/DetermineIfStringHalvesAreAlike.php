<?php

namespace App;

/**
 * Determine if String Halves Are Alike
 *
 * You are given a string s of even length. Split this string into two halves of equal lengths, and let a be the first
 * half and b be the second half. Two strings are alike if they have the same number of vowels
 * ('a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'). Notice that s contains uppercase and lowercase letters.
 *
 * Example 1:
 * Input: s = "book"
 * Output: true
 * Explanation: a = "bo" and b = "ok". a has 1 vowel and b has 1 vowel. Therefore, they are alike.
 *
 * Example 2:
 * Input: s = "textbook"
 * Output: false
 * Explanation: a = "text" and b = "book". a has 1 vowel whereas b has 2. Therefore, they are not alike.
 * Notice that the vowel o is counted twice.
 * Return true if a and b are alike. Otherwise, return false.
 *
 * https://leetcode.com/problems/determine-if-string-halves-are-alike
 */
class DetermineIfStringHalvesAreAlike
{
    /**
     * @param string $str
     * @return bool
     */
    public function halvesAreAlike(string $str): bool
    {
        $vowels = ['a', 'e', 'i', 'o', 'u'];
        $str = strtolower($str);
        $strLength = strlen($str);
        $firstHalf = substr($str, 0, (int) ($strLength / 2));
        $secondHalf = substr($str, (int) ($strLength / 2));
        $firstHalfVowelsCount = 0;
        $secondHalfVowelsCount = 0;
        for ($i = 0; $i < $strLength / 2; $i++) {
            if (in_array($firstHalf[$i], $vowels, true)) {
                $firstHalfVowelsCount++;
            }
            if (in_array($secondHalf[$i], $vowels, true)) {
                $secondHalfVowelsCount++;
            }
        }

        return $firstHalfVowelsCount === $secondHalfVowelsCount;
    }
}
