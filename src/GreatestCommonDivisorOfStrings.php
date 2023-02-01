<?php

namespace App;

/**
 * Greatest Common Divisor of Strings
 *
 * For two strings s and t, we say "t divides s" if and only if s = t + ... + t (i.e., t is concatenated with itself one
 * or more times). Given two strings str1 and str2, return the largest string x such that x divides both str1 and str2.
 *
 * Example 1:
 * Input: str1 = 'ABCABC', str2 = 'ABC'
 * Output: 'ABC'
 *
 * Example 2:
 * Input: str1 = 'ABABAB', str2 = 'ABAB'
 * Output: 'AB'
 *
 * Example 3:
 * Input: str1 = 'LEET', str2 = 'CODE'
 * Output: ""
 *
 * https://leetcode.com/problems/greatest-common-divisor-of-strings
 */
class GreatestCommonDivisorOfStrings
{
    /**
     * @param string $str1
     * @param string $str2
     * @return string
     */
    public function gcdOfStrings(string $str1, string $str2): string
    {
        $len1 = strlen($str1);
        $len2 = strlen($str2);
        for ($i = min($len1, $len2); $i >= 1; $i--) {
            if ($this->valid($str1, $str2, $i)) {
                return substr($str1, 0, $i);
            }
        }
        return '';
    }

    private function valid(string $str1, string $str2, int $k): bool
    {
        $len1 = strlen($str1);
        $len2 = strlen($str2);
        if ($len1 % $k > 0 || $len2 % $k > 0) {
            return false;
        } else {
            $base = substr($str1, 0, $k);
            $n1 = (int) ($len1 / $k);
            $n2 = (int) ($len2 / $k);
            return $str1 === str_repeat($base, $n1) && $str2 === str_repeat($base, $n2);
        }
    }

    private function joinWords(string $str, int $k): string
    {
        return str_repeat($str, $k);
    }
}
