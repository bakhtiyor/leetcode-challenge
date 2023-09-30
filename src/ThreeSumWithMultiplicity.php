<?php

namespace App;

/**
 * 3Sum With Multiplicity
 *
 * Given an integer array arr, and an integer target, return the number of tuples i, j, k such that i < j < k
 * and arr[i] + arr[j] + arr[k] == target. As the answer can be very large, return it modulo 109 + 7.
 *
 * Example 1:
 * Input: arr = [1,1,2,2,3,3,4,4,5,5], target = 8
 * Output: 20
 * Explanation:
 * Enumerating by the values (arr[i], arr[j], arr[k]):
 * (1, 2, 5) occurs 8 times;
 * (1, 3, 4) occurs 8 times;
 * (2, 2, 4) occurs 2 times;
 * (2, 3, 3) occurs 2 times.
 *
 * Example 2:
 * Input: arr = [1,1,2,2,2,2], target = 5
 * Output: 12
 * Explanation:
 * arr[i] = 1, arr[j] = arr[k] = 2 occurs 12 times:
 * We choose one 1 from [1,1] in 2 ways,
 * and two 2s from [2,2,2,2] in 6 ways.
 *
 * Example 3:
 * Input: arr = [2,1,3], target = 6
 * Output: 1
 * Explanation: (1, 2, 3) occured one time in the array, so we return 1.
 *
 * https://leetcode.com/problems/3sum-with-multiplicity
 */
class ThreeSumWithMultiplicity
{
    /**
     * @param int[] $arr
     * @param int $target
     * @return int
     */
    public function threeSumMulti(array $arr, int $target): int
    {
        $count = 0;
        $mod = 1000000007;
        $map = [];

        /** @var int $i */
        foreach ($arr as $i => $val) {
            $count = ($count + ($map[$target - $val] ?? 0)) % $mod;

            foreach (array_slice($arr, 0, $i) as $val2) {
                $map[$val2 + $val] = ($map[$val2 + $val] ?? 0) + 1;
            }
        }

        return $count;
    }
}
