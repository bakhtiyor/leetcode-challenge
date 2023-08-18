<?php

namespace App;

/**
 * Check Array Formation Through Concatenation
 *
 * You are given an array of distinct integers arr and an array of integer arrays pieces, where the integers in pieces
 * are distinct. Your goal is to form arr by concatenating the arrays in pieces in any order. However, you are not
 * allowed to reorder the integers in each array pieces[i]. Return true if it is possible to form the array arr from
 * pieces. Otherwise, return false.
 *
 * Example 1:
 * Input: arr = [15,88], pieces = [[88],[15]]
 * Output: true
 * Explanation: Concatenate [15] then [88]
 *
 * Example 2:
 * Input: arr = [49,18,16], pieces = [[16,18,49]]
 * Output: false
 * Explanation: Even though the numbers match, we cannot reorder pieces[0].
 *
 * Example 3:
 * Input: arr = [91,4,64,78], pieces = [[78],[4,64],[91]]
 * Output: true
 * Explanation: Concatenate [91] then [4,64] then [78]
 *
 * https://leetcode.com/problems/check-array-formation-through-concatenation
 */
class CheckArrayFormationThroughConcatenation
{
    /**
     * @param int[] $arr
     * @param int[][] $pieces
     * @return bool
     */
    public function canFormArray(array $arr, array $pieces): bool
    {
        $map = [];
        foreach ($pieces as $subArray) {
            $map[implode('-', $subArray)] = false;
        }

        $currentPiece = [];
        for ($i = 0, $iMax = count($arr); $i < $iMax; $i++) {
            $currentPiece[] = $arr[$i];
            $key = implode('-', $currentPiece);
            if (isset($map[$key]) && $map[$key] === false) {
                $map[$key] = true;
                $currentPiece = [];
            }
        }

        if (!empty($currentPiece)) {
            return false; // we have something from array, for which we found no match
        }
        foreach ($map as $wasUsed) {
            if (!$wasUsed) {
                return false;
            }
        }

        return true;
    }
}
