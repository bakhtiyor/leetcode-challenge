<?php

namespace App;

/**
 * Valid Palindrome II
 *
 * Given a string s, return true if the s can be palindrome after deleting at most one character from it.
 *
 * Example 1:
 * Input: s = "aba"         Output: true
 *
 * Example 2:
 * Input: s = "abca"        Output: true            Explanation: You could delete the character 'c'
 *
 * Example 3:
 * Input: s = "abc"         Output: false
 *
 * https://leetcode.com/problems/valid-palindrome-ii
 */
class ValidPalindromeII
{
    /**
     * @param string $str
     * @return bool
     */
    public function validPalindrome(string $str): bool
    {
        $left = 0;
        $right = strlen($str) - 1;
        $strArr = str_split($str);

        while ($left < $right) {
            if ($strArr[$left] === $strArr[$right]) {
                $left++;
                $right--;
            } else {
                return (
                    $this->isValidPalindrome($str, $left, $right - 1) ||
                    $this->isValidPalindrome($str, $left + 1, $right)
                );
            }
        }

        return true;
    }

    /**
     * @param string $str
     * @param int $left
     * @param int $right
     * @return bool
     */
    private function isValidPalindrome(string $str, int $left, int $right): bool
    {
        $strArr = str_split($str);
        while ($left < $right) {
            if ($strArr[$left] === $strArr[$right]) {
                $left++;
                $right--;
            } else {
                return false;
            }
        }
        return true;
    }
}
