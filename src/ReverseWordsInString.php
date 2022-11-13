<?php

namespace App;

/**
 * Reverse Words in a String
 *
 * Given an input string s, reverse the order of the words.
 * A word is defined as a sequence of non-space characters. The words in s will be separated by at least one space.
 * Return a string of the words in reverse order concatenated by a single space.
 * Note that s may contain leading or trailing spaces or multiple spaces between two words. The returned string should
 * only have a single space separating the words. Do not include any extra spaces.
 *
 * Example 1:
 * Input: s = "the sky is blue"         Output: "blue is sky the"
 *
 * Example 2:
 * Input: s = "  hello world  "         Output: "world hello"
 * Explanation: Your reversed string should not contain leading or trailing spaces.
 *
 * https://leetcode.com/problems/reverse-words-in-a-string
 */
class ReverseWordsInString
{
    /**
     * @param string $str
     * @return string
     */
    public function reverseWords(string $str): string
    {
        $str = $this->removeDuplicateSpaces($str);
        $textToArray = explode(' ', $str);
        $result = [];
        $numWords = count($textToArray);
        for ($i = $numWords - 1; $i >= 0; $i--) {
            $result[] = $textToArray[$i];
        }
        return implode(' ', $result);
    }

    /**
     * @param string $str
     * @return string
     */
    private function removeDuplicateSpaces(string $str): string
    {
        $str = trim($str);
        $textToArray = explode(' ', $str);
        $result = [];
        foreach ($textToArray as $word) {
            if (trim($word) !== '') {
                $result[] = trim($word);
            }
        }
        return implode(' ', $result);
    }
}
