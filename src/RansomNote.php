<?php

namespace App;

/**
 * Ransom Note
 *
 * Given two strings ransomNote and magazine, return true if ransomNote can be constructed by using the letters from
 * magazine and false otherwise. Each letter in magazine can only be used once in ransomNote.
 *
 * Example 1:
 * Input: ransomNote = "a", magazine = "b"
 * Output: false
 *
 * Example 2:
 * Input: ransomNote = "aa", magazine = "ab"
 * Output: false
 *
 * Example 3:
 * Input: ransomNote = "aa", magazine = "aab"
 * Output: true
 *
 * https://leetcode.com/problems/ransom-note
 */
class RansomNote
{
    /**
     * @param string $ransomNote
     * @param string $magazine
     * @return bool
     */
    public function canConstruct(string $ransomNote, string $magazine): bool
    {
        /** @var array<array-key, string> $magazineArr */
        $magazineArr = str_split($magazine);
        $magazineHash = $this->createHash($magazineArr);

        /** @var array<array-key, string> $ransomNoteArr */
        $ransomNoteArr = str_split($ransomNote);
        $ransomNoteHash = $this->createHash($ransomNoteArr);

        foreach ($ransomNoteHash as $ransomNoteIndex => $ransomNoteValue) {
            if (!(isset($magazineHash[$ransomNoteIndex]) && $magazineHash[$ransomNoteIndex] >= $ransomNoteValue)) {
                return false;
            }
        }
        return true;
    }

    /**
     * @param array<array-key, string> $nums
     * @return array<array-key, int>
     */
    private function createHash(array $nums): array
    {
        $wordsHash = [];
        foreach ($nums as $num) {
            if (isset($wordsHash[$num])) {
                $wordsHash[$num]++;
            } else {
                $wordsHash[$num] = 1;
            }
        }

        return $wordsHash;
    }
}
