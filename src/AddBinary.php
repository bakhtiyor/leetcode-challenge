<?php

namespace App;

/**
 * Add Binary
 *
 * Given two binary strings a and b, return their sum as a binary string.
 *
 * Example 1:
 * Input: a = "11", b = "1"
 * Output: "100"
 *
 * Example 2:
 * Input: a = "1010", b = "1011"
 * Output: "10101"
 *
 * https://leetcode.com/problems/add-binary
 */
class AddBinary
{
    /**
     * @param string $a
     * @param string $b
     * @return string
     */
    public function addBinary(string $a, string $b): string
    {
        $result = '';
        $aReversed = array_reverse(str_split($a));
        $bReversed = array_reverse(str_split($b));
        $carry = 0;
        for ($i = 0; $i < max(strlen($a), strlen($b)); $i++) {
            $digitA = 0;
            if (isset($aReversed[$i])) {
                $digitA = (int) $aReversed[$i];
            }
            $digitB = 0;
            if (isset($bReversed[$i])) {
                $digitB = (int) $bReversed[$i];
            }
            $total = $digitA + $digitB + $carry;
            $char = $total % 2;
            $result = $char . $result;
            $carry = (int) ($total / 2);
        }
        if ($carry > 0) {
            $result = '1' . $result;
        }
        return $result;
    }
}
