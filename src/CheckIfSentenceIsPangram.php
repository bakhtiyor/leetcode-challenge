<?php

namespace App;

/**
 * Check if the Sentence Is Pangram
 *
 * A pangram is a sentence where every letter of the English alphabet appears at least once. Given a string sentence
 * containing only lowercase English letters, return true if sentence is a pangram, or false otherwise.
 * Example 1:
 * Input: sentence = "thequickbrownfoxjumpsoverthelazydog"
 * Output: true
 * Explanation: sentence contains at least one of every letter of the English alphabet.
 *
 * Example 2:
 * Input: sentence = "leetcode"
 * Output: false
 *
 * https://leetcode.com/problems/check-if-the-sentence-is-pangram
 */
class CheckIfSentenceIsPangram
{
    /**
     * @param string $sentence
     * @return bool
     */
    public function checkIfPangram(string $sentence): bool
    {
        $hash = [];
        for ($i = 0, $iMax = strlen($sentence); $i < $iMax; $i++) {
            $hash[$sentence[$i]] = true;
        }

        return count($hash) === 26;
    }
}
