<?php

namespace App;

/**
 * Find All Duplicates in an Array
 *
 * Given an integer array nums of length n where all the integers of nums are in the range [1, n] and each integer
 * appears once or twice, return an array of all the integers that appears twice. You must write an algorithm that runs
 * in O(n) time and uses only constant extra space.
 *
 * Example 1:
 * Input: nums = [4,3,2,7,8,2,3,1]
 * Output: [2,3]
 *
 * Example 2:
 * Input: nums = [1,1,2]
 * Output: [1]
 *
 * https://leetcode.com/problems/find-all-duplicates-in-an-array
 */
class FindAllDuplicatesInArray
{
    /**
     * @param array<array-key, int> $nums
     * @return array
     */
    public function findDuplicates(array $nums): array
    {
        $duplicates = [];
        $numsCount = count($nums);
        for ($i = 0; $i < $numsCount; $i++) {
            $indexToCheck = abs($nums[$i]) - 1;

            if ($nums[$indexToCheck] < 0) {
                $duplicates[] = $indexToCheck + 1;
            }
            $nums[$indexToCheck] = -$nums[$indexToCheck];
        }
        return $duplicates;
    }
}
