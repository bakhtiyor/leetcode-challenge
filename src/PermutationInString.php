<?php

namespace App;

/**
 * Permutation in String
 *
 * Given two strings s1 and s2, return true if s2 contains a permutation of s1, or false otherwise. In other words,
 * return true if one of s1's permutations is the substring of s2.
 *
 * Example 1:
 * Input: s1 = "ab", s2 = "eidbaooo"
 * Output: true
 * Explanation: s2 contains one permutation of s1 ("ba").
 *
 * Example 2:
 * Input: s1 = "ab", s2 = "eidboaoo"
 * Output: false
 *
 * https://leetcode.com/problems/permutation-in-string
 */
class PermutationInString
{
    /**
     * @param string $str1
     * @param string $str2
     * @return bool
     */
    public function checkInclusion(string $str1, string $str2): bool
    {
        $str1Hash = $this->createHash($str1);
        $str1Length = strlen($str1);
        $str2Length = strlen($str2);

        $curPos = 0;
        while ($curPos < $str2Length) {
            $subStr2 = substr($str2, $curPos, $str1Length);
            $str2Hash = $this->createHash($subStr2);

            if ($this->compareTwoHashArrays($str1Hash, $str2Hash)) {
                return true;
            }
            $curPos++;
        }
        return false;
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
    /**
     * @param string $str
     * @return array<array-key, int>
     */
    private function createHash(string $str): array
    {
        $strHash = [];
        $strLength = strlen($str);
        for ($i = 0; $i < $strLength; $i++) {
            if (!isset($strHash[$str[$i]])) {
                $strHash[$str[$i]] = 1;
            } else {
                $strHash[$str[$i]]++;
            }
        }

        return $strHash;
    }
}
