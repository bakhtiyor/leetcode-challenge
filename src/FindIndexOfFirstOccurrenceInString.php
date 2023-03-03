<?php

namespace App;

/**
 * Find the Index of the First Occurrence in a String
 *
 * Given two strings needle and haystack, return the index of the first occurrence of needle in haystack, or -1 if
 * needle is not part of haystack.
 * Example 1:
 * Input: haystack = "sadbutsad", needle = "sad"
 * Output: 0
 * Explanation: "sad" occurs at index 0 and 6.
 * The first occurrence is at index 0, so we return 0.
 *
 * Example 2:
 * Input: haystack = "leetcode", needle = "leeto"
 * Output: -1
 * Explanation: "leeto" did not occur in "leetcode", so we return -1.
 *
 * https://leetcode.com/problems/find-the-index-of-the-first-occurrence-in-a-string
 */
class FindIndexOfFirstOccurrenceInString
{
    /**
     * @param string $haystack
     * @param string $needle
     * @return int
     */
    public function strStr(string $haystack, string $needle): int
    {
        if ($needle === "") {
            return 0;
        }

        $haystackLength = strlen($haystack);
        $needleLength = strlen($needle);

        for ($i = 0; $i <= $haystackLength - $needleLength; $i++) {
            if (substr($haystack, $i, $needleLength) === $needle) {
                return $i;
            }
        }

        return -1;
    }
}
