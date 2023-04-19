<?php

namespace App;

/**
 * Prime In Diagonal
 *
 * You are given a 0-indexed two-dimensional integer array nums. Return the largest prime number that lies on at least
 * one of the diagonals of nums. In case, no prime is present on any of the diagonals, return 0.
 * Note that:
 * - An integer is prime if it is greater than 1 and has no positive integer divisors other than 1 and itself.
 * - An integer val is on one of the diagonals of nums if there exists an integer i for which nums[i][i] = val or
 * an i for which nums[i][nums.length-i-1] = val.
 *
 * Example 1:
 * Input: nums = [[1,2,3],[5,6,7],[9,10,11]]
 * Output: 11
 * Explanation: The numbers 1, 3, 6, 9, and 11 are the only numbers present on at least one of the diagonals. Since 11
 * is the largest prime, we return 11.
 *
 * Example 2:
 * Input: nums = [[1,2,3],[5,17,7],[9,11,10]]
 * Output: 17
 * Explanation: The numbers 1, 3, 9, 10, and 17 are all present on at least one of the diagonals. 17 is the largest
 * prime, so we return 17.
 *
 * https://leetcode.com/problems/prime-in-diagonal
 */
class PrimeInDiagonal
{
    /**
     * @param int[][] $nums
     * @return int
     */
    public function diagonalPrime(array $nums): int
    {
        $maxPrime = 0;
        for ($row = 0, $rowMax = count($nums); $row < $rowMax; $row++) {
            for ($col = 0, $colMax = count($nums[$row]); $col < $colMax; $col++) {
                if ($row === $col || $row + $col === $rowMax - 1) {
                    if ($this->isPrime($nums[$row][$col])) {
                        $maxPrime = max($maxPrime, $nums[$row][$col]);
                    }
                }
            }
        }
        return $maxPrime;
    }

    /**
     * @param int $num
     * @return bool
     */
    private function isPrime(int $num): bool
    {
        if ($num < 2) {
            return false;
        }
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i === 0) {
                return false;
            }
        }
        return true;
    }
}
