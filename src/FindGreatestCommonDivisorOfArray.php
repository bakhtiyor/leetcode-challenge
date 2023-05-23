<?php

namespace App;

/**
 * Find Greatest Common Divisor of Array
 *
 * Given an integer array nums, return the greatest common divisor of the smallest number and largest number in nums.
 * The greatest common divisor of two numbers is the largest positive integer that evenly divides both numbers.
 *
 * Example 1:
 * Input: nums = [2,5,6,9,10]
 * Output: 2
 * Explanation:
 * The smallest number in nums is 2.
 * The largest number in nums is 10.
 * The greatest common divisor of 2 and 10 is 2.
 *
 * Example 2:
 * Input: nums = [7,5,6,8,3]
 * Output: 1
 * Explanation:
 * The smallest number in nums is 3.
 * The largest number in nums is 8.
 * The greatest common divisor of 3 and 8 is 1.
 *
 * Example 3:
 * Input: nums = [3,3]
 * Output: 3
 * Explanation:
 * The smallest number in nums is 3.
 * The largest number in nums is 3.
 * The greatest common divisor of 3 and 3 is 3.
 *
 * https://leetcode.com/problems/find-greatest-common-divisor-of-array
 */
class FindGreatestCommonDivisorOfArray
{
    /**
     * @param array<array-key, int> $nums
     * @return int
     */
    public function findGCD(array $nums): int
    {
        if (!empty($nums)) {
            $min = min($nums);
            $max = max($nums);
            return $this->gcd($min, $max);
        }
        return 0;
    }

    /**
     * @param int $a
     * @param int $b
     * @return int
     */
    private function gcd(int $a, int $b): int
    {
        if ($a === 0) {
            return $b;
        }
        return $this->gcd($b % $a, $a);
    }
}
