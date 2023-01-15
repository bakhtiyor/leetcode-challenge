<?php

namespace App;

/**
 * Reverse Only Letters
 *
 * Given a string s, reverse the string according to the following rules:
 * - All the characters that are not English letters remain in the same position.
 * - All the English letters (lowercase or uppercase) should be reversed.
 * Return s after reversing it.
 *
 * Example 1:
 * Input: s = "ab-cd"
 * Output: "dc-ba"
 *
 * Example 2:
 * Input: s = "Test1ng-Leet=code-Q!"
 * Output: "Qedo1ct-eeLg=ntse-T!"
 *
 * https://leetcode.com/problems/reverse-only-letters
 */
class ReverseOnlyLetters
{
    /**
     * @param string $str
     * @return string
     */
    public function reverseOnlyLetters(string $str): string
    {
        $leftIndex = 0;
        $rightIndex = strlen($str) - 1;
        while ($leftIndex < $rightIndex) {
            if (!ctype_alpha($str[$leftIndex])) {
                $leftIndex++;
            } elseif (!ctype_alpha($str[$rightIndex])) {
                $rightIndex--;
            } else {
                $tmp = $str[$leftIndex];
                $str[$leftIndex] = $str[$rightIndex];
                $str[$rightIndex] = $tmp;
                $leftIndex++;
                $rightIndex--;
            }
        }
        return $str;
    }
}
