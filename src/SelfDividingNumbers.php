<?php

namespace App;

/**
 * Self Dividing Numbers
 *
 * A self-dividing number is a number that is divisible by every digit it contains. For example, 128 is a self-dividing
 * number because 128 % 1 == 0, 128 % 2 == 0, and 128 % 8 == 0. A self-dividing number is not allowed to contain the
 * digit zero.
 * Given two integers left and right, return a list of all the self-dividing numbers in the range [left, right].
 *
 * Example 1:
 * Input: left = 1, right = 22
 * Output: [1,2,3,4,5,6,7,8,9,11,12,15,22]
 *
 * Example 2:
 * Input: left = 47, right = 85
 * Output: [48,55,66,77]
 *
 * https://leetcode.com/problems/self-dividing-numbers
 */
class SelfDividingNumbers
{
    /**
     * @param int $left
     * @param int $right
     * @return array<array-key, int>
     */
    public function selfDividingNumbers(int $left, int $right): array
    {
        $result = [];
        for ($number = $left; $number <= $right; $number++) {
            if ($this->isSelfDividing($number)) {
                $result[] = $number;
            }
        }
        return $result;
    }

    /**
     * @param int $number
     * @return bool
     */
    private function isSelfDividing(int $number): bool
    {
        $originalNumber = $number;
        while ($number / 10 > 0) {
            $digit = $number % 10;
            if ($digit === 0 || $originalNumber % $digit !== 0) {
                return false;
            }
            $number = (int) ($number / 10);
        }
        return true;
    }
}
