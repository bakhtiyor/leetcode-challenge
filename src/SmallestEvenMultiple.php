<?php

namespace App;

/**
 * Smallest Even Multiple
 *
 * Given a positive integer n, return the smallest positive integer that is a multiple of both 2 and n.
 *
 * Example 1:
 * Input: n = 5
 * Output: 10
 * Explanation: The smallest multiple of both 5 and 2 is 10.
 *
 * Example 2:
 * Input: n = 6
 * Output: 6
 * Explanation: The smallest multiple of both 6 and 2 is 6. Note that a number is a multiple of itself.
 *
 * https://leetcode.com/problems/smallest-even-multiple
 */
class SmallestEvenMultiple
{
    /**
     * @param int $n
     * @return int
     */
    public function smallestEvenMultiple(int $n): int
    {
        $multiple = 2; // Start with the first even number
        while (true) {
            if ($multiple % $n === 0) {
                return $multiple;
            }
            $multiple += 2; // Increment by 2 to ensure even numbers
        }
        return $multiple;
    }
}
