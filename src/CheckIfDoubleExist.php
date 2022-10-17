<?php

namespace App;

/**
 * Check If N and Its Double Exist
 *
 * Given an array arr of integers, check if there exist two indices i and j such that :
 * i != j
 * 0 <= i, j < arr.length
 * arr[i] == 2 * arr[j]
 * Example 1:
 * Input: arr = [10,2,5,3]
 * Output: true
 * Explanation: For i = 0 and j = 2, arr[i] == 10 == 2 * 5 == 2 * arr[j]
 *
 * https://leetcode.com/problems/check-if-n-and-its-double-exist
 */
class CheckIfDoubleExist
{
    /**
     * @param array<array-key, int> $arr
     * @return bool
     */
    public function checkIfExist(array $arr): bool
    {
        for ($i = 0, $iMax = count($arr); $i < $iMax; $i++) {
            for ($j = 0, $jMax = count($arr); $j < $jMax; $j++) {
                if ($i !== $j && $arr[$i] === 2 * $arr[$j]) {
                    return true;
                }
            }
        }
        return false;
    }
}
