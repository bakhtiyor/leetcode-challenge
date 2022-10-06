<?php

namespace App;

/**
 * Valid Palindrome
 *
 * A phrase is a palindrome if, after converting all uppercase letters into lowercase letters and removing all
 * non-alphanumeric characters, it reads the same forward and backward. Alphanumeric characters include
 * letters and numbers.
 * Given a string s, return true if it is a palindrome, or false otherwise.
 *
 * Example 1:
 * Input: s = "A man, a plan, a canal: Panama"
 * Output: true
 * Explanation: "amanaplanacanalpanama" is a palindrome.
 *
 * Example 2:
 * Input: s = "race a car"
 * Output: false
 * Explanation: "raceacar" is not a palindrome.
 *
 * https://leetcode.com/problems/valid-palindrome
 */
class ValidPalindrome
{
    /**
     * @param string $str
     * @return bool
     */
    public function isPalindrome(string $str): bool
    {
        $chars = $this->removeNonAlphanumericChars($str);
        $string = implode('', $chars);
        $reversedString = strrev($string);
        return $string === $reversedString;
    }

    /**
     * @param string $str
     * @return array<array-key, string>
     */
    private function removeNonAlphanumericChars(string $str): array
    {
        $chars = [];
        $stringLength = strlen($str);
        for ($i = 0; $i < $stringLength; $i++) {
            $char = $str[$i];
            if (ctype_alnum($char)) {
                $chars[] = strtolower($char);
            }
        }

        return $chars;
    }
}
