<?php

namespace App;

/**
 * Isomorphic Strings
 *
 * Given two strings s and t, determine if they are isomorphic. Two strings s and t are isomorphic if the characters in
 * s can be replaced to get t. All occurrences of a character must be replaced with another character while preserving
 * the order of characters. No two characters may map to the same character, but a character may map to itself.
 *
 * Example 1:
 * Input: s = "egg", t = "add"
 * Output: true
 *
 * Example 2:
 * Input: s = "foo", t = "bar"
 * Output: false
 *
 * Example 3:
 * Input: s = "paper", t = "title"
 * Output: true
 *
 * https://leetcode.com/problems/isomorphic-strings
 */
class IsomorphicStrings
{
    /**
     * @param string $s
     * @param string $t
     * @return bool
     */
    public function isIsomorphic(string $s, string $t): bool
    {
        $mappingDictStoT = array_fill(0, 256, -1);
        $mappingDictTtoS = array_fill(0, 256, -1);

        for ($i = 0, $iMax = strlen($s); $i < $iMax; $i++) {
            $c1 = ord($s[$i]);
            $c2 = ord($t[$i]);

            if ($mappingDictStoT[$c1] === -1 && $mappingDictTtoS[$c2] === -1) {
                $mappingDictStoT[$c1] = $c2;
                $mappingDictTtoS[$c2] = $c1;
            } elseif (!($mappingDictStoT[$c1] === $c2 && $mappingDictTtoS[$c2] === $c1)) {
                return false;
            }
        }
        return true;
    }
}
