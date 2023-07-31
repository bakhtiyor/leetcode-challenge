<?php

namespace App;

/**
 * Prime Arrangements
 *
 * Return the number of permutations of 1 to n so that prime numbers are at prime indices (1-indexed.)
 * (Recall that an integer is prime if and only if it is greater than 1, and cannot be written as a product of two
 * positive integers both smaller than it.) Since the answer may be large, return the answer modulo 10^9 + 7.
 *
 * Example 1:
 * Input: n = 5
 * Output: 12
 * Explanation: For example [1,2,5,4,3] is a valid permutation, but [5,2,3,4,1] is not because the prime number 5 is
 * at index 1.
 *
 * Example 2:
 * Input: n = 100
 * Output: 682289015
 *
 * https://leetcode.com/problems/prime-arrangements
 */
class PrimeArrangements
{
    private function isPrime(int $y): bool
    {
        if ($y === 1) {
            return false;
        }
        for ($i = 2; $i <= $y / 2; $i++) {
            if ($y % $i === 0) {
                return false;
            }
        }
        return true;
    }

    private function fac(int $x): int
    {
        $f = 1;
        while ($x > 0) {
            $f = ($f * $x) % ((10 ** 9) + 7);
            $x--;
        }
        return $f;
    }

    /**
     * @param int $n
     * @return int
     */
    public function numPrimeArrangements(int $n): int
    {
        $c = 0;
        for ($i = 1; $i <= $n; $i++) {
            if ($this->isPrime($i) === true) {
                $c++;
            }
        }

        return $this->fac($n - $c) * $this->fac($c) % ((10 ** 9) + 7);
    }
}
