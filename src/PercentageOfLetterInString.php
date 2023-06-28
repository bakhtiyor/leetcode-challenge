<?php

namespace App;

/**
 * Percentage of Letter in String
 *
 * Given a string s and a character letter, return the percentage of characters in s that equal letter rounded down to
 * the nearest whole percent.
 *
 * Example 1:
 * Input: s = "foobar", letter = "o"
 * Output: 33
 * Explanation:
 * The percentage of characters in s that equal the letter 'o' is 2 / 6 * 100% = 33% when rounded down, so we return 33.
 *
 * Example 2:
 * Input: s = "jjjj", letter = "k"
 * Output: 0
 * Explanation: The percentage of characters in s that equal the letter 'k' is 0%, so we return 0.
 *
 * https://leetcode.com/problems/percentage-of-letter-in-string
 */
class PercentageOfLetterInString
{
    /**
     * @param string $str
     * @param string $letter
     * @return int
     */
    public function percentageLetter(string $str, string $letter): int
    {
        $count = 0;
        $length = strlen($str);
        for ($i = 0; $i < $length; $i++) {
            if ($str[$i] === $letter) {
                $count++;
            }
        }
        return (int) floor($count / $length * 100);
    }
}
