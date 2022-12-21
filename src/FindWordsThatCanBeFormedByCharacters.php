<?php

namespace App;

/**
 * Find Words That Can Be Formed by Characters
 *
 * You are given an array of strings words and a string chars. A string is good if it can be formed by characters from
 * chars (each character can only be used once). Return the sum of lengths of all good strings in words.
 *
 * Example 1:
 * Input: words = ["cat","bt","hat","tree"], chars = "atach"
 * Output: 6
 * Explanation: The strings that can be formed are "cat" and "hat" so the answer is 3 + 3 = 6.
 *
 * Example 2:
 * Input: words = ["hello","world","leetcode"], chars = "welldonehoneyr"
 * Output: 10
 * Explanation: The strings that can be formed are "hello" and "world" so the answer is 5 + 5 = 10.
 *
 * https://leetcode.com/problems/find-words-that-can-be-formed-by-characters
 */
class FindWordsThatCanBeFormedByCharacters
{
    /**
     * @param array<array-key, string> $words
     * @param string $chars
     * @return int
     */
    public function countCharacters(array $words, string $chars): int
    {
        $charsHashTable = $this->createHashTable($chars);
        $totalLength = 0;
        foreach ($words as $word) {
            $wordHash = $this->createHashTable($word);
            $length = 0;
            foreach ($wordHash as $key => $value) {
                if (isset($charsHashTable[$key]) && $charsHashTable[$key] >= $value) {
                    $length += $value;
                } else {
                    $length = 0;
                    break;
                }
            }
            $totalLength += $length;
        }
        return $totalLength;
    }

    /**
     * @param string $chars
     * @return array<string, int>
     */
    private function createHashTable(string $chars): array
    {
        $hashTable = [];
        for ($i = 0; $i < strlen($chars); $i++) {
            if (isset($hashTable[$chars[$i]])) {
                $hashTable[$chars[$i]]++;
            } else {
                $hashTable[$chars[$i]] = 1;
            }
        }
        return $hashTable;
    }
}
