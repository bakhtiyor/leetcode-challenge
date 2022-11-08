<?php

namespace App;

/**
 * Reverse Words in a String III
 *
 * Given a string s, reverse the order of characters in each word within a sentence while still preserving whitespace
 * and initial word order.
 *
 * Example 1:
 * Input: s = "Let's take LeetCode contest"
 * Output: "s'teL ekat edoCteeL tsetnoc"
 *
 * https://leetcode.com/problems/reverse-words-in-a-string-iii
 */
class ReverseWords
{
    /**
     * @param string $text
     * @return string
     */
    public function reverseWords(string $text): string
    {
        $textToArray = explode(' ', $text);
        $result = [];
        foreach ($textToArray as $word) {
            $wordToArray = str_split($word);
            $this->reverseString($wordToArray);
            $result[] = implode('', $wordToArray);
        }
        return implode(' ', $result);
    }

    /**
     * @param array<array-key, string> $s
     * @return void
     */
    private function reverseString(array &$s): void
    {
        $numWords = count($s);
        $middle = (int) round($numWords / 2);
        for ($i = 0; $i < $middle; $i++) {
            $tmp = $s[$i];
            $s[$i] = $s[$numWords - $i - 1];
            $s[$numWords - $i - 1] = $tmp;
        }
    }
}
