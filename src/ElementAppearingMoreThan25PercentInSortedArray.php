<?php

namespace App;

/**
 * Element Appearing More Than 25% In Sorted Array
 *
 * Given an integer array sorted in non-decreasing order, there is exactly one integer in the array that occurs more
 * than 25% of the time, return that integer.
 *
 * Example 1:
 * Input: arr = [1,2,2,6,6,6,6,7,10]
 * Output: 6
 *
 * Example 2:
 * Input: arr = [1,1]
 * Output: 1
 *
 * https://leetcode.com/problems/element-appearing-more-than-25-in-sorted-array
 */
class ElementAppearingMoreThan25PercentInSortedArray
{
    /**
     * @param int[] $arr
     * @return int
     */
    public function findSpecialInteger(array $arr): int
    {
        $count = count($arr);
        $quarter = $count / 4;

        $current = $arr[0];
        $currentCount = 1;

        for ($i = 1; $i < $count; $i++) {
            if ($arr[$i] === $current) {
                $currentCount++;
            } else {
                $current = $arr[$i];
                $currentCount = 1;
            }

            if ($currentCount > $quarter) {
                return $current;
            }
        }

        return $current;
    }
}
