<?php

namespace App;

/**
 * Count Pairs Of Similar Strings
 *
 * You are given a 0-indexed string array words. Two strings are similar if they consist of the same characters.
 * - For example, "abca" and "cba" are similar since both consist of characters 'a', 'b', and 'c'.
 * - However, "abacba" and "bcfd" are not similar since they do not consist of the same characters.
 * Return the number of pairs (i, j) such that 0 <= i < j <= word.length - 1 and the two strings words[i] and
 * words[j] are similar.
 *
 * Example 1:
 * Input: words = ["aba","aabb","abcd","bac","aabc"]
 * Output: 2
 * Explanation: There are 2 pairs that satisfy the conditions:
 * - i = 0 and j = 1 : both words[0] and words[1] only consist of characters 'a' and 'b'.
 * - i = 3 and j = 4 : both words[3] and words[4] only consist of characters 'a', 'b', and 'c'.
 *
 * Example 2:
 * Input: words = ["nba","cba","dba"]
 * Output: 0
 * Explanation: Since there does not exist any pair that satisfies the conditions, we return 0.
 *
 * https://leetcode.com/problems/count-pairs-of-similar-strings
 */
class CountPairsOfSimilarStrings
{
    /**
     * @param string[] $words
     * @return int
     */
    public function similarPairs(array $words): int
    {
        $count = count($words);
        $counter = 0;
        for ($i = 0; $i < $count - 1; $i++) {
            for ($j = $i + 1; $j < $count; $j++) {
                $array = array_unique(str_split($words[$i]));
                $array2 = array_unique(str_split($words[$j]));
                sort($array);
                sort($array2);
                if ($array === $array2) {
                    $counter++;
                }
            }
        }
        return $counter;
    }
}
