<?php

namespace App;

/**
 * Number of Segments in a String
 *
 * Given a string s, return the number of segments in the string. A segment is defined to be a contiguous sequence
 * of non-space characters.
 * Example 1:
 * Input: s = "Hello, my name is John"
 * Output: 5
 * Explanation: The five segments are ["Hello,", "my", "name", "is", "John"]
 *
 * Example 2:
 * Input: s = "Hello"
 * Output: 1
 *
 * https://leetcode.com/problems/number-of-segments-in-a-string
 */
class NumberOfSegmentsInString
{
    /**
     * @param string $str
     * @return int
     */
    public function countSegments(string $str): int
    {
        $index = 0;
        $numWords = 0;
        $letterFound = false;
        while ($index < strlen($str)) {
            if ($str[$index] === ' ' && $letterFound) {
                $numWords++;
                $letterFound = false;
            } elseif ($str[$index] !== ' ') {
                $letterFound = true;
            }
            $index++;
        }
        if ($letterFound) {
            $numWords++;
        }
        return $numWords;
    }
}
