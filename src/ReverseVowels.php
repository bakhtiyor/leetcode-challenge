<?php

namespace App;

/**
 * Reverse Vowels of a String
 *
 * Given a string s, reverse only all the vowels in the string and return it.
 * The vowels are 'a', 'e', 'i', 'o', and 'u', and they can appear in both lower and upper cases, more than once.
 *
 * Example 1:
 * Input: s = "hello"
 * Output: "holle"
 *
 * Example 2:
 * Input: s = "leetcode"
 * Output: "leotcede"
 *
 * https://leetcode.com/problems/reverse-vowels-of-a-string
 */
class ReverseVowels
{
    /**
     * @param string $str
     * @return string
     */
    public function reverseVowels(string $str): string
    {
        $left = 0;
        $right = strlen($str) - 1;
        $strArr = str_split($str);

        while ($left < $right) {
            while ($left < count($strArr) && !$this->isVowel($strArr[$left])) {
                $left++;
            }
            while ($right >= 0 && !$this->isVowel($strArr[$right])) {
                $right--;
            }
            if ($left < $right) {
                $tmp = $strArr[$left];
                $strArr[$left] = $strArr[$right];
                $strArr[$right] = $tmp;
                $left++;
                $right--;
            }
        }
        return implode('', $strArr);
    }

    private function isVowel(string $word): bool
    {
        $vowels = ['a', 'A', 'e', 'E', 'i', 'I', 'o', 'O', 'u', 'U'];
        return in_array($word, $vowels);
    }
}
