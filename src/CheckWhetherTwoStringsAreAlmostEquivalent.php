<?php

namespace App;

/**
 * Check Whether Two Strings are Almost Equivalent
 *
 * Two strings word1 and word2 are considered almost equivalent if the differences between the frequencies of each
 * letter from 'a' to 'z' between word1 and word2 is at most 3. Given two strings word1 and word2, each of length n,
 * return true if word1 and word2 are almost equivalent, or false otherwise. The frequency of a letter x is the number
 * of times it occurs in the string.
 *
 * Example 1:
 * Input: word1 = "aaaa", word2 = "bccb"
 * Output: false
 * Explanation: There are 4 'a's in "aaaa" but 0 'a's in "bccb".
 * The difference is 4, which is more than the allowed 3.
 *
 * Example 2:
 * Input: word1 = "abcdeef", word2 = "abaaacc"
 * Output: true
 * Explanation: The differences between the frequencies of each letter in word1 and word2 are at most 3:
 * - 'a' appears 1 time in word1 and 4 times in word2. The difference is 3.
 * - 'b' appears 1 time in word1 and 1 time in word2. The difference is 0.
 * - 'c' appears 1 time in word1 and 2 times in word2. The difference is 1.
 * - 'd' appears 1 time in word1 and 0 times in word2. The difference is 1.
 * - 'e' appears 2 times in word1 and 0 times in word2. The difference is 2.
 * - 'f' appears 1 time in word1 and 0 times in word2. The difference is 1.
 *
 * Example 3:
 * Input: word1 = "cccddabba", word2 = "babababab"
 * Output: true
 * Explanation: The differences between the frequencies of each letter in word1 and word2 are at most 3:
 * - 'a' appears 2 times in word1 and 4 times in word2. The difference is 2.
 * - 'b' appears 2 times in word1 and 5 times in word2. The difference is 3.
 * - 'c' appears 3 times in word1 and 0 times in word2. The difference is 3.
 * - 'd' appears 2 times in word1 and 0 times in word2. The difference is 2.
 *
 * https://leetcode.com/problems/check-whether-two-strings-are-almost-equivalent
 */
class CheckWhetherTwoStringsAreAlmostEquivalent
{
    /**
     * @param string $word1
     * @param string $word2
     * @return bool
     */
    public function checkAlmostEquivalent(string $word1, string $word2): bool
    {
        $hashtable = [];
        for ($i = 0, $iMax = strlen($word1); $i < $iMax; $i++) {
            if (!isset($hashtable[$word1[$i]])) {
                $hashtable[$word1[$i]] = 0;
            }
            if (!isset($hashtable[$word2[$i]])) {
                $hashtable[$word2[$i]] = 0;
            }
            ++$hashtable[$word1[$i]];
            --$hashtable[$word2[$i]];
        }
        $keys = array_keys($hashtable);
        foreach ($keys as $jValue) {
            if (abs($hashtable[$jValue]) > 3) {
                return false;
            }
        }
        return true;
    }
}
