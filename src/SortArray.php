<?php

namespace App;

/**
 * Sort an Array
 *
 * Given an array of integers nums, sort the array in ascending order and return it. You must solve the problem without
 * using any built-in functions in O(nlog(n)) time complexity and with the smallest space complexity possible.
 *
 * Example 1:
 * Input: nums = [5,2,3,1]
 * Output: [1,2,3,5]
 * Explanation: After sorting the array, the positions of some numbers are not changed (for example, 2 and 3), while the
 * positions of other numbers are changed (for example, 1 and 5).
 *
 * Example 2:
 * Input: nums = [5,1,1,2,0,0]
 * Output: [0,0,1,1,2,5]
 * Explanation: Note that the values of nums are not necessary unique.
 *
 * https://leetcode.com/problems/sort-an-array
 */
class SortArray
{
    /**
     * @param int[] $numbers
     * @return int[]
     */
    public function sortArray(array $numbers): array
    {
        if (count($numbers) <= 1) {
            return $numbers;
        }
        $mid = (int) (round(count($numbers) / 2));
        $left = $this->sortArray(array_slice($numbers, 0, $mid));
        $right = $this->sortArray(array_slice($numbers, $mid));
        return $this->merge($left, $right);
    }

    /**
     * @param int[] $numbers1
     * @param int[] $numbers2
     * @return int[]
     */
    private function merge(array $numbers1, array $numbers2): array
    {
        $newArray = [];
        $i = 0;
        $j = 0;

        while ($i < count($numbers1) and $j < count($numbers2)) {
            if ($numbers1[$i] > $numbers2[$j]) {
                $newArray[] = $numbers2[$j];
                $j++;
            } else {
                $newArray[] = $numbers1[$i];
                $i++;
            }
        }

        for ($x = $i, $xMax = count($numbers1); $x < $xMax; $x++) {
            $newArray[] = $numbers1[$x];
        }

        for ($x = $j, $xMax = count($numbers2); $x < $xMax; $x++) {
            $newArray[] = $numbers2[$x];
        }

        return $newArray;
    }
}
