<?php

namespace App;

/**
 * Greatest English Letter in Upper and Lower Case
 *
 * Given a string of English letters s, return the greatest English letter which occurs as both a lowercase and
 * uppercase letter in s. The returned letter should be in uppercase. If no such letter exists, return an empty string.
 * An English letter b is greater than another letter a if b appears after a in the English alphabet.
 *
 * Example 1:
 * Input: s = "lEeTcOdE"
 * Output: "E"
 * Explanation:
 * The letter 'E' is the only letter to appear in both lower and upper case.
 *
 * Example 2:
 * Input: s = "arRAzFif"
 * Output: "R"
 * Explanation:
 * The letter 'R' is the greatest letter to appear in both lower and upper case.
 * Note that 'A' and 'F' also appear in both lower and upper case, but 'R' is greater than 'F' or 'A'.
 *
 * Example 3:
 * Input: s = "AbCdEfGhIjK"
 * Output: ""
 * Explanation:
 * There is no letter that appears in both lower and upper case.
 *
 * https://leetcode.com/problems/greatest-english-letter-in-upper-and-lower-case
 */
class GreatestEnglishLetterInUpperAndLowerCase
{
    /**
     * @psalm-suppress UnusedForeachValue
     * @param string $str
     * @return string
     */
    public function greatestLetter(string $str): string
    {
        $str = array_fill_keys(str_split($str), "");
        krsort($str);
        foreach ($str as $k => $value) {
            if (ctype_upper($k)) {
                break;
            }
            $su = strtoupper($k);
            if (isset($str[$su])) {
                return $su;
            }
        }
        return "";
    }
}
