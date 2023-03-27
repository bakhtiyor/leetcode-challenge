<?php

namespace App;

/**
 * Number of Even and Odd Bits
 *
 * You are given a positive integer n.
 * - Let even denote the number of even indices in the binary representation of n (0-indexed) with value 1.
 * - Let odd denote the number of odd indices in the binary representation of n (0-indexed) with value 1.
 * Return an integer array answer where answer = [even, odd].
 *
 * Example 1:
 * Input: n = 17
 * Output: [2,0]
 * Explanation: The binary representation of 17 is 10001.
 * It contains 1 on the 0th and 4th indices.
 * There are 2 even and 0 odd indices.
 *
 * Example 2:
 * Input: n = 2
 * Output: [0,1]
 * Explanation: The binary representation of 2 is 10.
 * It contains 1 on the 1st index.
 * There are 0 even and 1 odd indices.
 *
 * https://leetcode.com/problems/number-of-even-and-odd-bits
 */
class NumberOfEvenAndOddBits
{
    /**
     * @param int $num
     * @return int[]
     */
    public function evenOddBit(int $num): array
    {
        $binary = $this->numberToBinary($num);
        $even = $odd = 0;
        for ($i = 0, $iMax = count($binary); $i < $iMax; $i++) {
            if ($binary[$i] === 1) {
                if ($i % 2 === 0) {
                    $even++;
                } else {
                    $odd++;
                }
            }
        }
        return [$even, $odd];
    }

    /**
     * There is a built-in function called decbin for converting a digit to a binary but for contest tasks it is not
     * recommended to use built-in functions.
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
        return $binary;
    }
}
