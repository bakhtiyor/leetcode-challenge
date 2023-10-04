<?php

namespace App;

/**
 * Steps to Make Array Non-decreasing
 *
 * You are given a 0-indexed integer array nums. In one step, remove all elements nums[i] where nums[i - 1] > nums[i]
 * for all 0 < i < nums.length. Return the number of steps performed until nums becomes a non-decreasing array.
 *
 * Example 1:
 * Input: nums = [5,3,4,4,7,3,6,11,8,5,11]
 * Output: 3
 * Explanation: The following are the steps performed:
 * - Step 1: [5,3,4,4,7,3,6,11,8,5,11] becomes [5,4,4,7,6,11,11]
 * - Step 2: [5,4,4,7,6,11,11] becomes [5,4,7,11,11]
 * - Step 3: [5,4,7,11,11] becomes [5,7,11,11]
 * [5,7,11,11] is a non-decreasing array. Therefore, we return 3.
 *
 * Example 2:
 * Input: nums = [4,5,7,7,13]
 * Output: 0
 * Explanation: nums is already a non-decreasing array. Therefore, we return 0.
 *
 * https://leetcode.com/problems/steps-to-make-array-non-decreasing
 */
class StepsToMakeArrayNonDecreasing
{
    /**
     * @param int[] $nums
     * @return int
     */
    public function totalSteps(array $nums): int
    {
        $st = [[@$nums[0], 0]];
        $ans = 0;

        foreach (array_slice($nums, 1) as $num) {
            $t = 0;
            while ($st && end($st)[0] <= $num) {
                $t = max($t, end($st)[1]);
                array_pop($st);
            }
            if ($st) {
                ++$t;
            } else {
                $t = 0;
            }
            $ans = max($ans, $t);
            $st[] = [$num, $t];
        }

        return $ans;
    }
}
