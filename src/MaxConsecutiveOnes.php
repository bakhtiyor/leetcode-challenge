<?php

namespace App;

/**
 * Max Consecutive Ones
 *
 * Given a binary array nums, return the maximum number of consecutive 1's in the array.
 *
 * Example 1:
 * Input: nums = [1,1,0,1,1,1]
 * Output: 3
 * The first two digits or the last three digits are consecutive 1s. The maximum number of consecutive 1s is 3.
 *
 * Example 2:
 * Input: nums = [1,0,1,1,0,1]
 * Output: 2
 * https://leetcode.com/problems/max-consecutive-ones
 */
class MaxConsecutiveOnes
{
    /**
     * @param array $nums
     * @return int
     */
    public function findMaxConsecutiveOnes(array $nums): int
    {
        $maxConsecutive = 0;
        $previuosMaxConsecutive = $maxConsecutive;
        /** @var int $num */
        foreach ($nums as $num) {
            if ($num === 1) {
                $maxConsecutive++;
            } else {
                $maxConsecutive = 0;
            }
            if ($maxConsecutive > $previuosMaxConsecutive) {
                $previuosMaxConsecutive = $maxConsecutive;
            }
        }
        return $previuosMaxConsecutive;
    }
}
