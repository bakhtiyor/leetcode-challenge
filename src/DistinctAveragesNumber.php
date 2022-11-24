<?php

namespace App;

/**
 * Number of Distinct Averages
 *
 * You are given a 0-indexed integer array nums of even length. As long as nums is not empty, you must repetitively:
 * Find the minimum number in nums and remove it.
 * Find the maximum number in nums and remove it.
 * Calculate the average of the two removed numbers.
 * The average of two numbers a and b is (a + b) / 2.
 * For example, the average of 2 and 3 is (2 + 3) / 2 = 2.5.
 * Return the number of distinct averages calculated using the above process.
 * Note that when there is a tie for a minimum or maximum number, any can be removed.
 *
 * Example 1:
 * Input: nums = [4,1,4,0,3,5]
 * Output: 2
 * Explanation:
 * 1. Remove 0 and 5, and the average is (0 + 5) / 2 = 2.5. Now, nums = [4,1,4,3].
 * 2. Remove 1 and 4. The average is (1 + 4) / 2 = 2.5, and nums = [4,3].
 * 3. Remove 3 and 4, and the average is (3 + 4) / 2 = 3.5.
 * Since there are 2 distinct numbers among 2.5, 2.5, and 3.5, we return 2.
 *
 * https://leetcode.com/problems/number-of-distinct-averages
 */
class DistinctAveragesNumber
{
    /**
     * @param array<array-key, int> $nums
     * @return int
     */
    public function distinctAverages(array $nums): int
    {
        $avgs = [];
        while (count($nums) > 0) {
            $max = max($nums);
            $min = min($nums);
            $avg = ($max + $min) / 2;
            if (!in_array($avg, $avgs, true)) {
                $avgs[] = $avg;
            }
            $maxIndex = array_search($max, $nums, true);
            unset($nums[$maxIndex]);
            $minIndex = array_search($min, $nums, true);
            unset($nums[$minIndex]);
        }
        return count($avgs);
    }
}
