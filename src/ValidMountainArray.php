<?php

namespace App;

/**
 * Valid Mountain Array
 *
 * Given an array of integers arr, return true if and only if it is a valid mountain array.
 * Recall that arr is a mountain array if and only if:
 * arr.length >= 3
 * There exists some i with 0 < i < arr.length - 1 such that:
 * arr[0] < arr[1] < ... < arr[i - 1] < arr[i]
 * arr[i] > arr[i + 1] > ... > arr[arr.length - 1]
 * Example 1:
 * Input: arr = [2,1]
 * Output: false
 *
 * Example 2:
 * Input: arr = [0,3,2,1]
 * Output: true
 *
 * https://leetcode.com/problems/valid-mountain-array
 */
class ValidMountainArray
{
    /**
     * @param array<array-key, int> $arr
     * @return bool
     */
    public function validMountainArray(array $arr): bool
    {
        $arrSize = count($arr);
        if ($arrSize < 3) {
            return false;
        }
        $max = $arr[0];
        $up = false;
        $down = false;
        for ($i = 1; $i < $arrSize; $i++) {
            if ($arr[$i] > $max) {
                $max = $arr[$i];
                $up = true;
            } else {
                break;
            }
        }
        if ($i < $arrSize) {
            $min = $arr[$i];
            $i++;
            if ($i < $arrSize) {
                for ($i = $i; $i < $arrSize; $i++) {
                    if ($arr[$i] < $min) {
                        $min = $arr[$i];
                        $down = true;
                    } else {
                        break;
                    }
                }
            } else {
                $down = ($min < $max);
            }
        }

        return $up && $down && ($i === $arrSize);
    }
}
