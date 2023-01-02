<?php

namespace App;

/**
 * Counting Bits
 *
 * Given an integer n, return an array ans of length n + 1 such that for each i (0 <= i <= n), ans[i] is the number of
 * 1's in the binary representation of i.
 *
 * Example 1:
 * Input: n = 5
 * Output: [0,1,1,2,1,2]
 * Explanation:
 * 0 --> 0
 * 1 --> 1
 * 2 --> 10
 * 3 --> 11
 * 4 --> 100
 * 5 --> 101
 *
 * https://leetcode.com/problems/counting-bits
 */
class CountingBits
{
    /**
     * @param int $number
     * @return array<array-key, int>
     */
    public function countBits(int $number): array
    {
        $result = [];
        for ($i = 0; $i <= $number; $i++) {
            $binary = $this->decimalToBinary($i);
            $numberOfOnes = array_map(static fn($number) => ($number === 1), $binary);
            $result[] = $numberOfOnes;
        }
        return $result;
    }

    /**
     * Step 1: Divide the number by 2 and find the remainder, then store the remainder in an array.

    Step 2: Divide the number by 2.

    Step 3: Repeat the above two steps until the number is greater than zero.

    Step 4: Print the array in reverse order to get the binary representation of the number.
     * @param int $number
     * @return array<array-key, int>
     */
    private function decimalToBinary(int $number): array
    {
        if ($number === 0) {
            return [0];
        }
        $result = [];
        while ($number > 0) {
            $result[] = $number % 2;
            $number = (int) floor($number / 2);
        }
        return array_reverse($result);
    }
}
