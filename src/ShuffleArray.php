<?php

namespace App;

/**
 * Shuffle the Array
 *
 * Given the array nums consisting of 2n elements in the form [x_1,x_2,...,x_n,y_1,y_2,...,y_n].
 * Return the array in the form [x_1,y_1,x_2,y_2,...,x_n,y_n].
 *
 * Example 1:
 * Input: nums = [2,5,1,3,4,7], n = 3
 * Output: [2,3,5,4,1,7]
 *
 * Example 2:
 * Input: nums = [1,2,3,4,4,3,2,1], n = 4
 * Output: [1,4,2,3,3,2,4,1]
 *
 * https://leetcode.com/problems/shuffle-the-array
 */
class ShuffleArray
{
    /**
     * @param array<array-key, int> $nums
     * @param int $n
     * @return array<array-key, int>
     */
    public function shuffle(array $nums, int $n): array
    {
        $result = [];
        for ($i = 0; $i < $n; $i++) {
            $result[] = $nums[$i];
            $result[] = $nums[$i + $n ];
        }
        return $result;
    }
}
