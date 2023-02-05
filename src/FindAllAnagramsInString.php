<?php

namespace App;

/**
 * Find All Anagrams in a String
 *
 * Given two strings s and p, return an array of all the start indices of p's anagrams in s. You may return the answer
 * in any order. An Anagram is a word or phrase formed by rearranging the letters of a different word or phrase,
 * typically using all the original letters exactly once.
 *
 * Example 1:
 * Input: s = "cbaebabacd", p = "abc"
 * Output: [0,6]
 * Explanation:
 * The substring with start index = 0 is "cba", which is an anagram of "abc".
 * The substring with start index = 6 is "bac", which is an anagram of "abc".
 *
 * Example 2:
 * Input: s = "abab", p = "ab"
 * Output: [0,1,2]
 *
 * https://leetcode.com/problems/find-all-anagrams-in-a-string
 */
class FindAllAnagramsInString
{
    /**
     * @param string $s
     * @param string $p
     * @return array
     */
    public function findAnagrams(string $s, string $p): array
    {
        if (strlen($p) > strlen($s)) {
            return [];
        }
        $pCount = array_count_values(str_split($p));
        $sCount = array_count_values(str_split(substr($s, 0, strlen($p))));
        $result = [];
        if ($this->compareTwoHashArrays($pCount, $sCount)) {
            $result = [0];
        }
        $left = 0;
        for ($i = strlen($p), $iMax = strlen($s); $i < $iMax; $i++) {
            if (isset($sCount[$s[$i]])) {
                $sCount[$s[$i]]++;
            } else {
                $sCount[$s[$i]] = 1;
            }
            $sCount[$s[$left]]--;
            if ($sCount[$s[$left]] === 0) {
                unset($sCount[$s[$left]]);
            }
            $left++;
            if ($this->compareTwoHashArrays($pCount, $sCount)) {
                $result[] = $left;
            }
        }
        return $result;
    }

    /**
     * @param array<array-key, int> $hash1
     * @param array<array-key, int> $hash2
     * @return bool
     */
    private function compareTwoHashArrays(array $hash1, array $hash2): bool
    {
        foreach ($hash1 as $key => $value) {
            if (!isset($hash2[$key]) || $hash2[$key] !== $value) {
                return  false;
            }
        }
        return true;
    }
}
