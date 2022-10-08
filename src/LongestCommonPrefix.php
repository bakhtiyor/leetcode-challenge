<?php

namespace App;

/**
 * Longest Common Prefix
 *
 * Write a function to find the longest common prefix string amongst an array of strings.
 * If there is no common prefix, return an empty string "".
 * Example 1:
 * Input: strs = ["flower","flow","flight"]
 * Output: "fl"
 * Example 2:

 * Input: strs = ["dog","racecar","car"]
 * Output: ""
 * Explanation: There is no common prefix among the input strings.
 *
 * https://leetcode.com/problems/longest-common-prefix/
 */
class LongestCommonPrefix
{
    /**
     * @param string[] $strs
     * @return string
     */
    public function longestCommonPrefix(array $strs): string
    {
        $strsCount = count($strs);
        if ($strsCount === 0) {
            return '';
        }
        $prefix = $strs[0];
        for ($i = 1; $i < $strsCount; $i++) {
            $index = 0;
            while (
                ($index < strlen($prefix)) &&
                $index < strlen($strs[$i]) &&
                $prefix[$index] === $strs[$i][$index]
            ) {
                $index++;
            }
            $prefix = substr($prefix, 0, $index);
        }
        if ($prefix !== '') {
            return $prefix;
        }
        return '';
    }
}
