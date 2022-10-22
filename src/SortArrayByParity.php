<?php

namespace App;

/**
 * Sort Array By Parity
 *
 * Given an integer array nums, move all the even integers at the beginning of the array followed by all the
 * odd integers. Return any array that satisfies this condition.
 * Example 1:
 * Input: nums = [3,1,2,4]
 * Output: [2,4,3,1]
 * Explanation: The outputs [4,2,3,1], [2,4,1,3], and [4,2,1,3] would also be accepted.
 *
 * https://leetcode.com/problems/sort-array-by-parity
 */
class SortArrayByParity
{
    /**
     * @param array<array-key, int> $nums
     * @return array<array-key, int>
     */
    public function sortArrayByParity(array $nums): array
    {
        $meatBallLeftPosition = 0;
        $meatBallSize = 0;
        $curIndex = 0;
        while ($curIndex < count($nums)) {
            if ($nums[$curIndex] % 2 === 1) {
                $meatBallSize++;
            } elseif ($meatBallSize > 0) {
                $tmp = $nums[$meatBallLeftPosition];
                $nums[$meatBallLeftPosition] = $nums[$curIndex];
                $nums[$curIndex] = $tmp;
                $meatBallLeftPosition++;
            } else {
                $meatBallLeftPosition++;
            }
            $curIndex++;
        }
        return $nums;
    }
}
