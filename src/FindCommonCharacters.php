<?php

namespace App;

/**
 * Find Common Characters
 *
 * Given a string array words, return an array of all characters that show up in all strings within the words (including
 * duplicates). You may return the answer in any order.
 *
 * Example 1:
 * Input: words = ["bella","label","roller"]
 * Output: ["e","l","l"]
 *
 * Example 2:
 * Input: words = ["cool","lock","cook"]
 * Output: ["c","o"]
 *
 * https://leetcode.com/problems/find-common-characters
 */
class FindCommonCharacters
{
    /**
     * @param string[] $words
     * @return string[]
     */
    public function commonChars(array $words): array
    {
        $minFreq = array_fill(0, 26, PHP_INT_MAX);
        $res = array();

        foreach ($words as $word) {
            $freq = array_fill(0, 26, 0);
            for ($i = 0, $iMax = strlen($word); $i < $iMax; $i++) {
                $c = $word[$i];
                $freq[ord($c) - ord('a')]++;
            }
            for ($i = 0; $i < 26; $i++) {
                $minFreq[$i] = min($minFreq[$i], $freq[$i]);
            }
        }

        for ($i = 0; $i < 26; $i++) {
            for ($j = 0; $j < $minFreq[$i]; $j++) {
                $res[] = chr($i + ord('a'));
            }
        }

        return $res;
    }
}
