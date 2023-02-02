<?php

namespace App;

/**
 * Summary Ranges
 *
 * You are given a sorted unique integer array nums. A range [a,b] is the set of all integers from a to b (inclusive).
 * Return the smallest sorted list of ranges that cover all the numbers in the array exactly. That is, each element of
 * nums is covered by exactly one of the ranges, and there is no integer x such that x is in one of the ranges but not
 * in nums.
 * Each range [a,b] in the list should be output as:
 * "a->b" if a != b
 * "a" if a == b
 *
 * Example 1:
 * Input: nums = [0,1,2,4,5,7]
 * Output: ["0->2","4->5","7"]
 * Explanation: The ranges are: [0,2] --> "0->2", [4,5] --> "4->5", [7,7] --> "7"
 *
 * Example 2:
 * Input: nums = [0,2,3,4,6,8,9]
 * Output: ["0","2->4","6","8->9"]
 * Explanation: The ranges are: [0,0] --> "0", [2,4] --> "2->4" [6,6] --> "6", [8,9] --> "8->9"
 *
 * https://leetcode.com/problems/summary-ranges
 */
class SummaryRanges
{
    /**
     * @param array<array-key, int> $nums
     * @return array<array-key, string>
     */
    public function summaryRanges(array $nums): array
    {
        if (count($nums) === 0) {
            return [];
        }
        $result = [];
        $prevNumber = $nums[0];
        $ranges = [$prevNumber];
        for ($i = 1, $iMax = count($nums); $i < $iMax; $i++) {
            if ($nums[$i] - $prevNumber === 1) {
                $prevNumber = $nums[$i];
                $ranges[] = $prevNumber;
            } else {
                $result[] = $this->addToSummaryRange($ranges);
                $prevNumber = $nums[$i];
                $ranges = [$prevNumber];
            }
        }
        $result[] = $this->addToSummaryRange($ranges);
        return $result;
    }

    /**
     * @param array<array-key, int> $ranges
     * @return string
     */
    public function addToSummaryRange(array $ranges): string
    {
        if (count($ranges) > 1) {
            return sprintf('%s->%s', $ranges[0], $ranges[count($ranges) - 1]);
        } else {
            return sprintf('%s', $ranges[0]);
        }
    }
}
