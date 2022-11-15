<?php

namespace App;

/**
 * Length of Last Word
 *
 * Given a string s consisting of words and spaces, return the length of the last word in the string.
 * A word is a maximal substring consisting of non-space characters only.
 *
 * Example 1:
 * Input: s = "Hello World"         Output: 5           Explanation: The last word is "World" with length 5.
 *
 * Example 2:
 * Input: s = "   fly me   to   the moon  "         Output: 4       Explanation: The last word is "moon" with length 4.
 *
 * https://leetcode.com/problems/length-of-last-word
 */
class LastWordLength
{
    /**
     * @param string $str
     * @return int
     */
    public function lengthOfLastWord(string $str): int
    {
        $textToArray = explode(' ', $str);
        $lastWord = '';
        foreach ($textToArray as $word) {
            if (trim($word) !== '') {
                $lastWord = trim($word);
            }
        }
        return strlen($lastWord);
    }
}
