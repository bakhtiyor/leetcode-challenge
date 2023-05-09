<?php

namespace App;

/**
 * Count Integers With Even Digit Sum
 *
 * Given a positive integer num, return the number of positive integers less than or equal to num whose digit sums are
 * even. The digit sum of a positive integer is the sum of all its digits.
 *
 * Example 1:
 * Input: num = 4
 * Output: 2
 * Explanation:
 * The only integers less than or equal to 4 whose digit sums are even are 2 and 4.
 *
 * Example 2:
 * Input: num = 30
 * Output: 14
 * Explanation:
 * The 14 integers less than or equal to 30 whose digit sums are even are
 * 2, 4, 6, 8, 11, 13, 15, 17, 19, 20, 22, 24, 26, and 28.
 *
 * https://leetcode.com/problems/count-integers-with-even-digit-sum
 */
class CountIntegersWithEvenDigitSum
{
    /**
     * @param int $num
     * @return int
     */
    public function countEven(int $num): int
    {
        $count = 0;
        for ($i = 1; $i <= $num; $i++) {
            if ($this->isEvenDigitSum($i)) {
                $count++;
            }
        }
        return $count;
    }

    /**
     * @param int $num
     * @return bool
     */
    private function isEvenDigitSum(int $num): bool
    {
        $sum = 0;
        while ($num > 0) {
            $sum += $num % 10;
            $num = (int)($num / 10);
        }
        return $sum % 2 === 0;
    }
}
