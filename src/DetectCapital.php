<?php

namespace App;

/**
 * Detect Capital
 *
 * We define the usage of capitals in a word to be right when one of the following cases holds:
 * - All letters in this word are capitals, like "USA".
 * - All letters in this word are not capitals, like "leetcode".
 * - Only the first letter in this word is capital, like "Google".
 * Given a string word, return true if the usage of capitals in it is right.
 *
 * Example 1:
 * Input: word = "USA"
 * Output: true
 *
 * Example 2:
 * Input: word = "FlaG"
 * Output: false
 *
 * https://leetcode.com/problems/detect-capital
 */
class DetectCapital
{
    /**
     * @param string $word
     * @return bool
     */
    public function detectCapitalUse(string $word): bool
    {
        $wordLength = strlen($word);
        $capitalLetters = 0;
        $lowercaseLetters = 0;
        for ($i = 0; $i < $wordLength; $i++) {
            if (strtoupper($word[$i]) === $word[$i]) {
                $capitalLetters++;
            } elseif (strtolower($word[$i]) === $word[$i]) {
                $lowercaseLetters++;
            }
        }
        if ($capitalLetters === $wordLength) {
            return true;
        }

        if ($lowercaseLetters === $wordLength) {
            return true;
        }

        if ($lowercaseLetters + 1 === $wordLength && strtoupper($word[0]) === $word[0]) {
            return true;
        }

        return false;
    }
}
