<?php

namespace App;

/**
 * Letter Combinations of a Phone Number
 *
 * Given a string containing digits from 2-9 inclusive, return all possible letter combinations that the number could
 * represent. Return the answer in any order. A mapping of digits to letters (just like on the telephone buttons) is
 * given below. Note that 1 does not map to any letters.
 *
 * Example 1:
 * Input: digits = "23"
 * Output: ["ad","ae","af","bd","be","bf","cd","ce","cf"]
 *
 * Example 3:
 * Input: digits = "2"
 * Output: ["a","b","c"]
 *
 * https://leetcode.com/problems/letter-combinations-of-a-phone-number
 */
class LetterCombinationsOfPhoneNumber
{
    /** @var array<array-key, array<array-key, string>>  */
    private array $digitsMapping = [
        2 => ['a', 'b', 'c'],
        3 => ['d', 'e', 'f'],
        4 => ['g', 'h', 'i'],
        5 => ['j', 'k', 'l'],
        6 => ['m', 'n', 'o'],
        7 => ['p', 'q', 'r', 's'],
        8 => ['t', 'u', 'v'],
        9 => ['w', 'x', 'y', 'z'],
    ];
    /**
     * @param string $digits
     * @return array<array-key, string>
     */
    public function letterCombinations(string $digits): array
    {
        if ($digits === '') {
            return [];
        }
        $combinations = [];
        $this->backtrack($digits, $combinations, 0, '');
        return $combinations;
    }

    /**
     * @param string $digits
     * @param array<array-key, string> $result
     * @param int $currentIndex
     * @param string $currentString
     * @return void
     */
    private function backtrack(string $digits, array &$result, int $currentIndex, string $currentString): void
    {
        if (strlen($currentString) === strlen($digits)) {
            $result[] = $currentString;
            return;
        }
        $currentDigitChars = $this->digitsMapping[$digits[$currentIndex]];
        foreach ($currentDigitChars as $char) {
            $this->backtrack($digits, $result, $currentIndex + 1, sprintf('%s%s', $currentString, $char));
        }
    }
}
