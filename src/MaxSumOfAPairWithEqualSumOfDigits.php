<?php

namespace App;

/**
 * Max Sum of a Pair With Equal Sum of Digits
 *
 * You are given a 0-indexed array nums consisting of positive integers. You can choose two indices i and j, such
 * that i != j, and the sum of digits of the number nums[i] is equal to that of nums[j]. Return the maximum value of
 * nums[i] + nums[j] that you can obtain over all possible indices i and j that satisfy the conditions.
 *
 * Example 1:
 * Input: nums = [18,43,36,13,7]
 * Output: 54
 * Explanation: The pairs (i, j) that satisfy the conditions are:
 * - (0, 2), both numbers have a sum of digits equal to 9, and their sum is 18 + 36 = 54.
 * - (1, 4), both numbers have a sum of digits equal to 7, and their sum is 43 + 7 = 50.
 * So the maximum sum that we can obtain is 54.
 *
 * Example 2:
 * Input: nums = [10,12,19,14]
 * Output: -1
 * Explanation: There are no two numbers that satisfy the conditions, so we return -1.
 *
 * https://leetcode.com/problems/max-sum-of-a-pair-with-equal-sum-of-digits
 */
class MaxSumOfAPairWithEqualSumOfDigits
{
    /**
     * @param int[] $nums
     * @return int
     */
    public function maximumSum(array $nums): int
    {
        $maxSum = PHP_INT_MIN;
        $digitSums = [];

        foreach ($nums as $num) {
            $sum = $this->digitSum($num);

            if (isset($digitSums[$sum])) {
                $maxSum = max($maxSum, $num + $digitSums[$sum]);
                $digitSums[$sum] = max($digitSums[$sum], $num);
            } else {
                $digitSums[$sum] = $num;
            }
        }

        return ($maxSum === PHP_INT_MIN) ? -1 : $maxSum;
    }

    private function digitSum(int $num): int
    {
        $sum = 0;
        while ($num > 0) {
            $sum += $num % 10;
            $num = (int)($num / 10);
        }
        return $sum;
    }
}
