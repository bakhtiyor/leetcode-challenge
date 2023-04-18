<?php

namespace App;

/**
 * Merge Strings Alternately
 *
 * You are given two strings word1 and word2. Merge the strings by adding letters in alternating order, starting with
 * word1. If a string is longer than the other, append the additional letters onto the end of the merged string.
 * Return the merged string.
 *
 * Example 1:
 * Input: word1 = "abc", word2 = "pqr"
 * Output: "apbqcr"
 * Explanation: The merged string will be merged as so:
 * word1:  a   b   c
 * word2:    p   q   r
 * merged: a p b q c r
 *
 * Example 2:
 * Input: word1 = "ab", word2 = "pqrs"
 * Output: "apbqrs"
 * Explanation: Notice that as word2 is longer, "rs" is appended to the end.
 * word1:  a   b
 * word2:    p   q   r   s
 * merged: a p b q   r   s
 *
 * Example 3:
 * Input: word1 = "abcd", word2 = "pq"
 * Output: "apbqcd"
 * Explanation: Notice that as word1 is longer, "cd" is appended to the end.
 * word1:  a   b   c   d
 * word2:    p   q
 * merged: a p b q c   d
 *
 * https://leetcode.com/problems/merge-strings-alternately
 */
class MergeStringsAlternately
{
    /**
     * @param string $word1
     * @param string $word2
     * @return string
     */
    public function mergeAlternately(string $word1, string $word2): string
    {
        $word1Length = strlen($word1);
        $word2Length = strlen($word2);
        $maxLength = max($word1Length, $word2Length);
        $result = '';
        for ($i = 0; $i < $maxLength; $i++) {
            if ($i < $word1Length) {
                $result .= $word1[$i];
            }
            if ($i < $word2Length) {
                $result .= $word2[$i];
            }
        }
        return $result;
    }
}
