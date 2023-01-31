<?php

namespace App;

/**
 * Keyboard Row
 *
 * Given an array of strings words, return the words that can be typed using letters of the alphabet on only one row of
 * American keyboard like the image below.
 * In the American keyboard:
 * - the first row consists of the characters "qwertyuiop",
 * - the second row consists of the characters "asdfghjkl", and
 * - the third row consists of the characters "zxcvbnm"
 *
 * Example 1:
 * Input: words = ["Hello","Alaska","Dad","Peace"]
 * Output: ["Alaska","Dad"]
 *
 * Example 2:
 * Input: words = ["omk"]
 * Output: []
 *
 * Example 3:
 * Input: words = ["adsdf","sfd"]
 * Output: ["adsdf","sfd"]
 *
 * https://leetcode.com/problems/keyboard-row
 */
class KeyboardRow
{
    /**
     * @param array<array-key, string> $words
     * @return array<array-key, string>
     */
    public function findWords(array $words): array
    {
        /** @var array<array-key, string> $rows */
        $rows = [
          'qwertyuiop',
          'asdfghjkl',
          'zxcvbnm'
        ];
        $result = [];
        foreach ($words as $word) {
            foreach ($rows as $row) {
                $typedLetters = 0;
                for ($i = 0, $iMax = strlen($word); $i < $iMax; $i++) {
                    for ($j = 0, $jMax = strlen($row); $j < $jMax; $j++) {
                        if (strtolower($word[$i]) === $row[$j]) {
                            $typedLetters++;
                            break;
                        }
                    }
                    if ($typedLetters === 0) {
                        break;
                    }
                }
                if (strlen($word) === $typedLetters) {
                    $result[] = $word;
                }
            }
        }
        return $result;
    }
}
