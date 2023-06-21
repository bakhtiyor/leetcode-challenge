<?php

namespace App;

/**
 * Split With Minimum Sum
 *
 * Given a positive integer num, split it into two non-negative integers num1 and num2 such that:
 * - The concatenation of num1 and num2 is a permutation of num.
 * - In other words, the sum of the number of occurrences of each digit in num1 and num2 is equal to the number of
 * occurrences of that digit in num.
 * - num1 and num2 can contain leading zeros.
 * Return the minimum possible sum of num1 and num2.
 * Notes: It is guaranteed that num does not contain any leading zeros. The order of occurrence of the digits in num1
 * and num2 may differ from the order of occurrence of num.
 *
 * Example 1:
 * Input: num = 4325
 * Output: 59
 * Explanation: We can split 4325 so that num1 is 24 and num2 is 35, giving a sum of 59. We can prove that 59 is indeed
 * the minimal possible sum.
 *
 * Example 2:
 * Input: num = 687
 * Output: 75
 * Explanation: We can split 687 so that num1 is 68 and num2 is 7, which would give an optimal sum of 75.
 *
 * https://leetcode.com/problems/split-with-minimum-sum
 */
class SplitWithMinimumSum
{
    /**
     * @param int $num
     * @return int
     */
    public function splitNum(int $num): int
    {
        $copy = array_map('intval', str_split((string) $num));
        sort($copy);
        $num1 = 0;
        $num2 = 0;
        for ($i = 0, $iMax = count($copy); $i < $iMax; $i++) {
            if ($i % 2 === 0) {
                $num1 = $num1 * 10 + $copy[$i];
            } elseif ($i % 2 !== 0) {
                $num2 = $num2 * 10 + $copy[$i];
            }
        }
        return $num1 + $num2;
    }
}
