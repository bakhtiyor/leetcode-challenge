<?php

namespace App;

/**
 * Maximum Number of Vowels in a Substring of Given Length
 *
 * Given a string s and an integer k, return the maximum number of vowel letters in any substring of s with length k.
 * Vowel letters in English are 'a', 'e', 'i', 'o', and 'u'.
 *
 * Example 1:
 * Input: s = "abciiidef", k = 3
 * Output: 3
 * Explanation: The substring "iii" contains 3 vowel letters.
 *
 * Example 2:
 * Input: s = "aeiou", k = 2
 * Output: 2
 * Explanation: Any substring of length 2 contains 2 vowels.
 *
 * Example 3:
 * Input: s = "leetcode", k = 3
 * Output: 2
 * Explanation: "lee", "eet" and "ode" contain 2 vowels.
 *
 * https://leetcode.com/problems/maximum-number-of-vowels-in-a-substring-of-given-length
 */
class MaximumNumberOfVowelsInSubstringOfGivenLength
{
    /**
     * @param string $str
     * @param int $k
     * @return int
     */
    public function maxVowels(string $str, int $k): int
    {
        $vowels = ['a', 'e', 'i', 'o', 'u'];
        $max = 0;
        $count = 0;
        $i = 0;
        $j = 0;
        while ($j < strlen($str)) {
            if (in_array($str[$j], $vowels)) {
                $count++;
            }
            if ($j - $i + 1 === $k) {
                $max = max($max, $count);
                if (in_array($str[$i], $vowels)) {
                    $count--;
                }
                $i++;
            }
            $j++;
        }
        return $max;
    }
}
