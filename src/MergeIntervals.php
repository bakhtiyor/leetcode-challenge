<?php

namespace App;

/**
 * Merge Intervals
 *
 * Given an array of intervals where intervals[i] = [start_i, end_i], merge all overlapping intervals, and return
 * an array of the non-overlapping intervals that cover all the intervals in the input.
 *
 * Example 1:
 * Input: intervals = [[1,3],[2,6],[8,10],[15,18]]
 * Output: [[1,6],[8,10],[15,18]]
 * Explanation: Since intervals [1,3] and [2,6] overlap, merge them into [1,6].
 *
 * Example 2:
 * Input: intervals = [[1,4],[4,5]]
 * Output: [[1,5]]
 * Explanation: Intervals [1,4] and [4,5] are considered overlapping.
 *
 * https://leetcode.com/problems/merge-intervals
 */
class MergeIntervals
{
    /**
     * @param int[][] $intervals
     * @return int[][]
     */
    public function merge(array $intervals): array
    {
        $result = [];
        $intervalsCount = count($intervals);
        if ($intervalsCount === 0) {
            return $result;
        }

        usort($intervals, static fn(array $a, array $b) => $a[0] <=> $b[0]);

        $result[] = $intervals[0];
        for ($i = 1; $i < $intervalsCount; $i++) {
            $lastResultIndex = count($result) - 1;
            $lastResult = $result[$lastResultIndex];
            $currentInterval = $intervals[$i];
            if ($lastResult[1] >= $currentInterval[0]) {
                $result[$lastResultIndex][1] = max($lastResult[1], $currentInterval[1]);
            } else {
                $result[] = $currentInterval;
            }
        }

        return $result;
    }
}
