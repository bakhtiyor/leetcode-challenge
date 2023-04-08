<?php

namespace App;

/**
 * Count the Digits That Divide a Number
 *
 * Given an integer num, return the number of digits in num that divide num.
 * An integer val divides nums if nums % val == 0.
 *
 * Example 1:
 * Input: num = 7
 * Output: 1
 * Explanation: 7 divides itself, hence the answer is 1.
 *
 * Example 2:
 * Input: num = 121
 * Output: 2
 * Explanation: 121 is divisible by 1, but not 2. Since 1 occurs twice as a digit, we return 2.
 *
 * Example 3:
 * Input: num = 1248
 * Output: 4
 * Explanation: 1248 is divisible by all of its digits, hence the answer is 4.
 *
 * https://leetcode.com/problems/count-the-digits-that-divide-a-number
 */
class CountDigitsThatDivideNumber
{
    /**
     * @param int $num
     * @return int
     */
    public function countDigits(int $num): int
    {
        $digits = $this->numberToDigits($num);
        $count = 0;
        foreach ($digits as $digit) {
            if ($num % $digit === 0) {
                $count++;
            }
        }
        return $count;
    }

    /**
     * Returns an array of digits of a number
     * @param int $number
     * @return int[]
     */
    private function numberToDigits(int $number): array
    {
        $digits = [];
        while ($number > 0) {
            $digits[] = $number % 10;
            $number = (int)($number / 10);
        }
        return $digits;
    }
}
