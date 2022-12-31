<?php

namespace App;

/**
 * Shuffle String
 *
 * You are given a string s and an integer array indices of the same length. The string s will be shuffled such that the
 * character at the i-th position moves to indices[i] in the shuffled string. Return the shuffled string.
 *
 * Example 1:
 * Input: s = "codeleet", indices = [4,5,6,7,0,2,1,3]
 * Output: "leetcode"
 * Explanation: As shown, "codeleet" becomes "leetcode" after shuffling.
 *
 * Example 2:
 * Input: s = "abc", indices = [0,1,2]
 * Output: "abc"
 * Explanation: After shuffling, each character remains in its position.
 *
 * https://leetcode.com/problems/shuffle-string
 */
class ShuffleString
{
    /**
     * @param string $str
     * @param array<array-key, int> $indices
     * @return string
     */
    public function restoreString(string $str, array $indices): string
    {
        $strNew = $str;
        for ($i = 0; $i < count($indices); $i++) {
            $strNew[$indices[$i]] = $str[$i];
        }
        return $strNew;
    }
}
