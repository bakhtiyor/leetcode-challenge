<?php

namespace App;

/**
 * Most Frequent Even Element
 *
 * Given an integer array nums, return the most frequent even element.
 * If there is a tie, return the smallest one. If there is no such element, return -1.
 *
 * Example 1:
 * Input: nums = [0,1,2,2,4,4,1]
 * Output: 2
 * Explanation:
 * The even elements are 0, 2, and 4. Of these, 2 and 4 appear the most. We return the smallest one, which is 2.
 *
 * Example 2:
 * Input: nums = [4,4,4,9,2,4]
 * Output: 4
 * Explanation: 4 is the even element appears the most.
 *
 * https://leetcode.com/problems/most-frequent-even-element
 */
class MostFrequentEvenElement
{
    /**
     * @param array<array-key, int> $nums
     * @return int
     */
    public function mostFrequentEven(array $nums): int
    {
        $hashNums = [];
        foreach ($nums as $num) {
            if ($num % 2 === 0) {
                if (isset($hashNums[$num])) {
                    $hashNums[$num]++;
                } else {
                    $hashNums[$num] = 1;
                }
            }
        }
        $maxCount = PHP_INT_MIN;
        $result = -1;
        foreach ($hashNums as $key => $value) {
            if ($value > $maxCount) {
                $maxCount = $value;
                $result = $key;
            }
            if ($value === $maxCount && $key < $result) {
                $result = $key;
            }
        }
        return $result;
    }
}
