<?php

namespace App;

/**
 * To Lower Case
 *
 * Given a string s, return the string after replacing every uppercase letter with the same lowercase letter.
 *
 * Example 1:
 * Input: s = "Hello"
 * Output: "hello"
 *
 * Example 2:
 * Input: s = "here"
 * Output: "here"
 *
 * Example 3:
 * Input: s = "LOVELY"
 * Output: "lovely"
 *
 * https://leetcode.com/problems/to-lower-case
 */
class ToLowerCase
{
    /**
     * @param string $str
     * @return string
     */
    public function toLowerCase(string $str): string
    {
        for ($i = 0, $iMax = strlen($str); $i < $iMax; $i++) {
            $letterCode = ord($str[$i]);
            if ($letterCode >= 65 && $letterCode <= 90) {
                $str[$i] = chr($letterCode + 32);
            }
        }
        return $str;
    }
}
