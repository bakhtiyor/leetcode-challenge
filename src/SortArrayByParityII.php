<?php

namespace App;

/**
 * Sort Array By Parity II
 *
 * Given an array of integers nums, half of the integers in nums are odd, and the other half are even.
 * Sort the array so that whenever nums[i] is odd, i is odd, and whenever nums[i] is even, i is even.*
 * Return any answer array that satisfies this condition.
 *
 * Example 1:
 * Input: nums = [4,2,5,7]
 * Output: [4,5,2,7]
 * Explanation: [4,7,2,5], [2,5,4,7], [2,7,4,5] would also have been accepted.
 *
 * Example 2:
 * Input: nums = [2,3]
 * Output: [2,3]
 *
 * https://leetcode.com/problems/sort-array-by-parity-ii
 */
class SortArrayByParityII
{
    /**
     * @param int[] $nums
     * @return int[]
     */
    public function sortArrayByParityII(array $nums): array
    {
        $even = [];
        $odd = [];
        foreach ($nums as $num) {
            if ($num % 2 === 0) {
                $even[] = $num;
            } else {
                $odd[] = $num;
            }
        }
        $result = [];
        for ($i = 0, $iMax = count($nums); $i < $iMax; $i++) {
            if ($i % 2 === 0) {
                $result[] = array_shift($even);
            } else {
                $result[] = array_shift($odd);
            }
        }
        return $result;
    }
}
