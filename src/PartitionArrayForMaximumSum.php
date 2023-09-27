<?php

namespace App;

/**
 * Partition Array for Maximum Sum
 *
 * Given an integer array arr, partition the array into (contiguous) sub arrays of length at most k. After partitioning,
 * each subarray has their values changed to become the maximum value of that subarray. Return the largest sum of the
 * given array after partitioning. Test cases are generated so that the answer fits in a 32-bit integer.
 *
 * Example 1:
 * Input: arr = [1,15,7,9,2,5,10], k = 3
 * Output: 84
 * Explanation: arr becomes [15,15,15,9,10,10,10]
 *
 * Example 2:
 * Input: arr = [1,4,1,5,7,3,6,1,9,9,3], k = 4
 * Output: 83
 *
 * Example 3:
 * Input: arr = [1], k = 1
 * Output: 1
 *
 * https://leetcode.com/problems/partition-array-for-maximum-sum
 */
class PartitionArrayForMaximumSum
{
    /**
     * @param int[] $arr
     * @param int $k
     * @return int
     */
    public function maxSumAfterPartitioning(array $arr, int $k): int
    {
        $n = count($arr);
        $dp = array_fill(0, $n, 0);
        for ($i = 0; $i < $n; $i++) {
            $max = 0;
            for ($j = 1; $j <= $k && $i - $j + 1 >= 0; $j++) {
                $max = max($max, $arr[$i - $j + 1]);
                $dp[$i] = max($dp[$i], ($i >= $j ? $dp[$i - $j] : 0) + $max * $j);
            }
        }
        return $dp[$n - 1];
    }
}
