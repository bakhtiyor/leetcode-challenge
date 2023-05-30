<?php

namespace App;

/**
 * Decrypt String from Alphabet to Integer Mapping
 *
 * You are given a string s formed by digits and '#'. We want to map s to English lowercase characters as follows:
 *  - Characters ('a' to 'i') are represented by ('1' to '9') respectively.
 *  - Characters ('j' to 'z') are represented by ('10#' to '26#') respectively.
 * Return the string formed after mapping. The test cases are generated so that a unique mapping will always exist.
 *
 * Example 1:
 * Input: s = "10#11#12"
 * Output: "jkab"
 * Explanation: "j" -> "10#" , "k" -> "11#" , "a" -> "1" , "b" -> "2".
 *
 * Example 2:
 * Input: s = "1326#"
 * Output: "acz"
 *
 * https://leetcode.com/problems/decrypt-string-from-alphabet-to-integer-mapping
 */
class DecryptStringFromAlphabetToIntegerMapping
{
    /**
     * @param string $str
     * @return string
     */
    public function freqAlphabets(string $str): string
    {
        $result = '';
        $length = strlen($str);
        for ($i = 0; $i < $length; $i++) {
            if ($i + 2 < $length && $str[$i + 2] === '#') {
                $result .= chr((int)substr($str, $i, 2) + 96);
                $i += 2;
            } else {
                $result .= chr((int)$str[$i] + 96);
            }
        }
        return $result;
    }
}
