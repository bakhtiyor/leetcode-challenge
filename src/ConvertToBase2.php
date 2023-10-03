<?php

namespace App;

/**
 * Convert to Base -2
 *
 * Given an integer n, return a binary string representing its representation in base -2. Note that the returned string
 * should not have leading zeros unless the string is "0".
 *
 * Example 1:
 * Input: n = 2
 * Output: "110"
 * Explanation: (-2)2 + (-2)1 = 2
 *
 * Example 2:
 * Input: n = 3
 * Output: "111"
 * Explanation: (-2)2 + (-2)1 + (-2)0 = 3
 *
 * Example 3:
 * Input: n = 4
 * Output: "100"
 * Explanation: (-2)2 = 4
 *
 * https://leetcode.com/problems/convert-to-base-2
 */
class ConvertToBase2
{
    /**
     * @param int $num
     * @return string
     */
    public function baseNeg2(int $num): string
    {
        if ($num === 0) {
            return '0';
        }

        $result = '';
        while ($num !== 0) {
            $remainder = $num % -2;
            $num = intdiv($num, -2);

            if ($remainder < 0) {
                $remainder += 2;
                ++$num;
            }

            $result = $remainder . $result;
        }

        return $result;
    }
}
