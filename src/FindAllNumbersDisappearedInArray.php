<?php

namespace App;

/**
 * Find All Numbers Disappeared in an Array
 *
 * Given an array nums of n integers where nums[i] is in the range [1, n], return an array of all the integers
 * in the range [1, n] that do not appear in nums.
 *
 * Example 1:
 * Input: nums = [4,3,2,7,8,2,3,1]
 * Output: [5,6]
 *
 * Example 2:
 * Input: nums = [1,1]
 * Output: [2]
 *
 * https://leetcode.com/problems/find-all-numbers-disappeared-in-an-array
 */
class FindAllNumbersDisappearedInArray
{
    /**
     * @param array<array-key, int> $nums
     * @return array<array-key, int>
     */
    public function findDisappearedNumbers(array $nums): array
    {
        $seen = [];
        foreach ($nums as $num) {
            $seen[$num] = true;
        }
        $countNums = count($nums);
        $missedNumbers = [];
        for ($i = 1; $i <= $countNums; $i++) {
            if (!isset($seen[$i])) {
                $missedNumbers[] = $i;
            }
        }
        return $missedNumbers;
    }
}
