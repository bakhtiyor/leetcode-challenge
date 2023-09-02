<?php

namespace App;

/**
 * Group Anagrams
 *
 * Given an array of strings strs, group the anagrams together. You can return the answer in any order. An Anagram is
 * a word or phrase formed by rearranging the letters of a different word or phrase, typically using all the original
 * letters exactly once.
 *
 * Example 1:
 * Input: strs = ["eat","tea","tan","ate","nat","bat"]
 * Output: [["bat"],["nat","tan"],["ate","eat","tea"]]
 *
 * Example 2:
 * Input: strs = [""]
 * Output: [[""]]
 *
 * Example 3:
 * Input: strs = ["a"]
 * Output: [["a"]]
 *
 * https://leetcode.com/problems/group-anagrams
 */
class GroupAnagrams
{
    /**
     * @param string[] $strs
     * @return string[][]
     */
    public function groupAnagrams(array $strs): array
    {
        if (count($strs) < 2) {
            return [$strs];
        }

        $result = [];
        foreach ($strs as $str) {
            $arr = str_split(strtolower($str));
            sort($arr);
            $key = implode($arr);
            if (!isset($result[$key])) {
                $result[$key] = [];
            }
            $result[$key][] = $str;
        }

        return $result;
    }
}
