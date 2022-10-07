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
        $prefixLength = 1;
        $commonPrefix = $strs[0][0] ?? '';
        $lastCommonPrefix = $commonPrefix;
        $stop = false;
        while (!$stop && count($strs) > 1) {
            $commonPrefixFound = 1;

            for ($i = 1; $i < $strsCount; $i++) {
                $strPrefix = substr($strs[$i], 0, $prefixLength);
                if ($commonPrefix !== $strPrefix) {
                    break;
                }
                $commonPrefixFound++;
            }

            if ($commonPrefixFound === $strsCount && $prefixLength < strlen($strs[0])) {
                $prefixLength++;
                $lastCommonPrefix = $commonPrefix;
                $commonPrefix = substr($strs[0], 0, $prefixLength);
            } else {
                if ($prefixLength == strlen($strs[0]) && $commonPrefixFound === $strsCount) {
                    $lastCommonPrefix = $commonPrefix;
                } elseif ($prefixLength == 1) {
                    $lastCommonPrefix = '';
                }
                $stop = true;
            }
        }
        return $lastCommonPrefix;
    }
}
