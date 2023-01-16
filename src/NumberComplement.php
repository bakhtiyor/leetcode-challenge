<?php

namespace App;

/**
 * Number Complement
 *
 * The complement of an integer is the integer you get when you flip all the 0's to 1's and all the 1's to 0's in its
 * binary representation. For example, The integer 5 is "101" in binary and its complement is "010" which is the
 * integer 2. Given an integer num, return its complement.
 *
 * Example 1:
 * Input: num = 5
 * Output: 2
 * Explanation: The binary representation of 5 is 101 (no leading zero bits), and its complement is 010.
 * So you need to output 2.
 *
 * Example 2:
 * Input: num = 1
 * Output: 0
 * Explanation: The binary representation of 1 is 1, and its complement is 0. So you need to output 0.
 *
 * https://leetcode.com/problems/number-complement
 */
class NumberComplement
{
    /**
     * @param int $number
     * @return int
     */
    public function findComplement(int $number): int
    {
        $binary = $this->numberToBinary($number);
        $binaryComplement = array_map(static fn(int $digit) => ($digit === 1) ? 0 : 1, $binary);
        return $this->binaryToNumber($binaryComplement);
    }

    /**
     * @param array<array-key, int> $binary
     * @return int
     */
    private function binaryToNumber(array $binary): int
    {
        $binary = array_reverse($binary);
        $sum = 0;
        for ($index = 0, $indexMax = count($binary); $index < $indexMax; $index++) {
            $sum += $binary[$index] * (2 ** $index);
        }
        return (int) $sum;
    }

    /**
     * @param int $number
     * @return array<array-key, int>
     */
    private function numberToBinary(int $number): array
    {
        $binary = [];
        while ($number > 0) {
            $binary[] = $number % 2;
            $number = (int) floor($number / 2);
        }
        return array_reverse($binary);
    }
}
