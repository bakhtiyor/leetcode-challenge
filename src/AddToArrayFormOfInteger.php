<?php

namespace App;

/**
 * Add to Array-Form of Integer
 *
 * The array-form of an integer num is an array representing its digits in left to right order.
 * For example, for num = 1321, the array form is [1,3,2,1]. Given num, the array-form of an integer, and an integer k,
 * return the array-form of the integer num + k.
 *
 * Example 1:
 * Input: num = [1,2,0,0], k = 34
 * Output: [1,2,3,4]
 * Explanation: 1200 + 34 = 1234
 *
 * Example 2:
 * Input: num = [2,7,4], k = 181
 * Output: [4,5,5]
 * Explanation: 274 + 181 = 455
 *
 * Example 3:
 * Input: num = [2,1,5], k = 806
 * Output: [1,0,2,1]
 * Explanation: 215 + 806 = 1021
 *
 * https://leetcode.com/problems/add-to-array-form-of-integer
 */
class AddToArrayFormOfInteger
{
    /**
     * @param array<array-key, int> $number
     * @param int $k
     * @return array<array-key, int>
     */
    public function addToArrayForm(array $number, int $k): array
    {
        $kDigits = $this->convertNumberToDigits($k);
        $zerroDiff = abs(count($number) - count($kDigits));
        $zerroArr = array_fill(0, $zerroDiff, 0);
        if (count($kDigits) < count($number)) {
            array_splice($kDigits, 0, 0, $zerroArr);
        } else {
            array_splice($number, 0, 0, $zerroArr);
        }
        $result = [];
        $remainder = 0;
        for ($i = count($number) - 1; $i >= 0; $i--) {
            $result[] = ($number[$i] + $kDigits[$i] + $remainder) % 10;
            $remainder = (int) (($number[$i] + $kDigits[$i] + $remainder) / 10);
        }
        if ($remainder > 0) {
            $result[] = $remainder;
        }
        return array_reverse($result);
    }

    /**
     * @param int $number
     * @return array<array-key, int>
     */
    private function convertNumberToDigits(int $number): array
    {
        $digits = [];
        while ($number > 0) {
            $digits[] = $number % 10;
            $number = (int) ($number / 10);
        }
        return array_reverse($digits);
    }
}
