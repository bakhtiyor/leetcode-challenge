<?php

namespace App;

/**
 * Jump Game
 *
 * You are given an integer array nums. You are initially positioned at the array's first index, and each element in the
 * array represents your maximum jump length at that position. Return true if you can reach the last index, or false
 * otherwise.
 *
 * Example 1:
 * Input: nums = [2,3,1,1,4]
 * Output: true
 * Explanation: Jump 1 step from index 0 to 1, then 3 steps to the last index.
 *
 * Example 2:
 * Input: nums = [3,2,1,0,4]
 * Output: false
 * Explanation: You will always arrive at index 3 no matter what. Its maximum jump length is 0, which makes it
 * impossible to reach the last index.
 *
 * https://leetcode.com/problems/jump-game
 */
class JumpGame
{
    /**
     * @param array<array-key, int> $nums
     * @return bool
     */
    public function canJump(array $nums): bool
    {
        if (count($nums) === 1) {
            return true;
        }
        $dp = [];
        return $this->jumpHelper($nums, 0, count($nums) - 1, $dp);
    }

    /**
     * @param array<array-key, int> $nums
     * @param int $current
     * @param int $last
     * @param array<array-key, bool> $dp
     * @return bool
     */
    public function jumpHelper(array $nums, int $current, int $last, array &$dp): bool
    {
        if ($current >= $last) {
            return true;
        }

        if (isset($dp[$current])) {
            return $dp[$current];
        }

        $answer = false;
        for ($i = 1; $i <= $nums[$current]; $i++) {
            $answer = $this->jumpHelper($nums, $current + $i, $last, $dp);
            if ($answer) {
                break;
            }
        }
        $dp[$current] = $answer;
        return $answer;
    }
}
