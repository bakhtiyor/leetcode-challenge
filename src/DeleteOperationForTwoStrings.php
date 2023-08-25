<?php

namespace App;

/**
 * Delete Operation for Two Strings
 *
 * Given two strings word1 and word2, return the minimum number of steps required to make word1 and word2 the same.
 * In one step, you can delete exactly one character in either string.
 *
 * Example 1:
 * Input: word1 = "sea", word2 = "eat"
 * Output: 2
 * Explanation: You need one step to make "sea" to "ea" and another step to make "eat" to "ea".
 *
 * Example 2:
 * Input: word1 = "leetcode", word2 = "etco"
 * Output: 4
 *
 * https://leetcode.com/problems/delete-operation-for-two-strings
 */
class DeleteOperationForTwoStrings
{
    /**
     * @param string $word1
     * @param string $word2
     * @return int
     */
    public function minDistance(string $word1, string $word2): int
    {
        $lcsLengthMap = [];
        // find the longest common substring by dp
        for ($i = 0, $iMax = strlen($word1); $i <= $iMax; $i++) {
            for ($j = 0, $jMax = strlen($word2); $j <= $jMax; $j++) {
                if ($i === 0 || $j === 0) {
                    $lcsLengthMap[$i][$j] = 0;
                } else {
                    if ($word1[$i - 1] === $word2[$j - 1]) {
                        $lcsLengthMap[$i][$j] = $lcsLengthMap[$i - 1][$j - 1] + 1;
                    } else {
                        $lcsLengthMap[$i][$j] = max($lcsLengthMap[$i - 1][$j], $lcsLengthMap[$i][$j - 1]);
                    }
                }
            }
        }
        return strlen($word1) + strlen($word2) - (2 * $lcsLengthMap[strlen($word1)][strlen($word2)]);
    }
}
