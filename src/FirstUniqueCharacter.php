<?php

namespace App;

/**
 * First Unique Character in a String
 *
 * Given a string s, find the first non-repeating character in it and return its index. If it does not exist, return -1.
 *
 * Example 1:
 * Input: s = "leetcode"            Output: 0
 * Example 2:
 * Input: s = "loveleetcode"        Output: 2
 * Example 3:
 * Input: s = "aabb"                Output: -1
 *
 * https://leetcode.com/problems/first-unique-character-in-a-string
 */
class FirstUniqueCharacter
{
    /**
     * @param string $str
     * @return int
     */
    public function firstUniqChar(string $str): int
    {
        $strHash = [];
        $sWords = str_split($str);
        foreach ($sWords as $sWord) {
            if (!isset($strHash[$sWord])) {
                $strHash[$sWord] = 1;
            } else {
                $strHash[$sWord]++;
            }
        }
        $firstNonRepeatingWord = '';
        foreach ($strHash as $key => $value) {
            if ($value === 1) {
                $firstNonRepeatingWord = $key;
                break;
            }
        }
        if ($firstNonRepeatingWord === '') {
            return -1;
        }
        return (int) strpos($str, $firstNonRepeatingWord);
    }
}
