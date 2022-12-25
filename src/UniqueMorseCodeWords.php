<?php

namespace App;

/**
 * Unique Morse Code Words
 *
 * International Morse Code defines a standard encoding where each letter is mapped to a series of dots and dashes,
 * as follows:
 * 'a' maps to '.-',
 * 'b' maps to '-...',
 * 'c' maps to '-.-.', and so on.
 * For convenience, the full table for the 26 letters of the English alphabet is given below:
 *['.-','-...','-.-.','-..','.','..-.','--.','....','..','.---','-.-','.-..','--','-.','---','.--.','--.-','.-.','...',
 * '-','..-','...-','.--','-..-','-.--','--..']
 * Given an array of strings words where each word can be written as a concatenation of the Morse code of each letter.
 * For example, 'cab' can be written as '-.-..--...', which is the concatenation of '-.-.', '.-', and '-...'. We will
 * call such a concatenation the transformation of a word.
 * Return the number of different transformations among all words we have.
 *
 * Example 1:
 * Input: words = ['gin','zen','gig','msg']
 * Output: 2
 * Explanation: The transformation of each word is:
 * 'gin' -> '--...-.'
 * 'zen' -> '--...-.'
 * 'gig' -> '--...--.'
 * 'msg' -> '--...--.'
 * There are 2 different transformations: '--...-.' and '--...--.'.
 *
 * https://leetcode.com/problems/unique-morse-code-words
 */
class UniqueMorseCodeWords
{
    /**
     * @param array<array-key, string> $words
     * @return int
     */
    public function uniqueMorseRepresentations(array $words): int
    {
        $morseHashTable = $this->getMorseTable();
        $uniqueWordsInMorse = [];
        foreach ($words as $word) {
            $wordInMorse = $this->convertWordToMorse($morseHashTable, $word);
            if (!in_array($wordInMorse, $uniqueWordsInMorse)) {
                $uniqueWordsInMorse[] = $wordInMorse;
            }
        }

        return count($uniqueWordsInMorse);
    }

    /**
     * @param array<array-key, string> $morseHashTable
     * @param string $word
     * @return string
     */
    private function convertWordToMorse(array $morseHashTable, string $word): string
    {
        $wordLength = strlen($word);
        $wordInMorse = '';
        for ($i = 0; $i < $wordLength; $i++) {
            $wordInMorse .= $morseHashTable[$word[$i]] ?? '';
        }
        return $wordInMorse;
    }

    /**
     * @return array<array-key, string>
     */
    private function getMorseTable(): array
    {
        $morse = ['.-','-...','-.-.','-..','.','..-.','--.','....','..','.---','-.-','.-..','--','-.','---','.--.',
            '--.-','.-.','...','-','..-','...-','.--','-..-','-.--','--..'];
        $morseHash = [];
        for ($i = 97; $i <= 122; $i++) {
            $morseHash[chr($i)] = $morse[$i - 97];
        }
        return $morseHash;
    }
}
