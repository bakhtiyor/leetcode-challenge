<?php

namespace App;

/**
 * Set Mismatch
 *
 * You have a set of integers s, which originally contains all the numbers from 1 to n. Unfortunately, due to some
 * error, one of the numbers in s got duplicated to another number in the set, which results in repetition of one number
 * and loss of another number. You are given an integer array nums representing the data status of this set after the
 * error. Find the number that occurs twice and the number that is missing and return them in the form of an array.
 *
 * Example 1:
 * Input: nums = [1,2,2,4]
 * Output: [2,3]
 *
 * Example 2:
 * Input: nums = [1,1]
 * Output: [1,2]
 *
 * https://leetcode.com/problems/set-mismatch
 */
class SetMismatch
{
    /**
     * @param int[] $nums
     * @return int[]
     */
    public function findErrorNums(array $nums): array
    {
        $numsCount = count($nums);
        $map = [];
        for ($i = 0; $i < $numsCount; $i++) {
            if (!isset($map[$nums[$i]])) {
                $map[$nums[$i]] = 0;
            }
            $map[$nums[$i]]++;
        }

        $missedNum = 0;
        $duplicate = 0;
        for ($i = 1; $i <= $numsCount; $i++) {
            if (!isset($map[$i])) {
                $missedNum = $i;
                continue;
            }
            if ($map[$i] === 2) {
                $duplicate = $i;
            }
        }
        return [$duplicate, $missedNum];
    }
}
