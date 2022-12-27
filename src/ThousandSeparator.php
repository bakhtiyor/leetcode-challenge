<?php

namespace App;

/**
 * Thousand Separator
 *
 * Given an integer n, add a dot (".") as the thousands separator and return it in string format.
 *
 * Example 1:
 * Input: n = 987
 * Output: "987"
 *
 * Example 2:
 * Input: n = 1234
 * Output: "1.234"
 *
 * https://leetcode.com/problems/thousand-separator
 */
class ThousandSeparator
{
    /**
     * @param int $num
     * @return string
     */
    public function thousandSeparator(int $num): string
    {
        if ($num < 1000) {
            return (string) $num;
        }
        $result = [];
        while ($num > 0) {
            if ($num > 1000 && $num % 1000 < 100) {
                $result[] = '0' . ($num % 1000);
            } else {
                $result[] = (string) ($num % 1000);
            }

            $num = (int) floor($num / 1000);
        }
        return implode('.', array_reverse($result));
    }
}
