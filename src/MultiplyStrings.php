<?php

namespace App;

/**
 * Multiply Strings
 *
 * Given two non-negative integers num1 and num2 represented as strings, return the product of num1 and num2, also
 * represented as a string.
 * Note: You must not use any built-in BigInteger library or convert the inputs to integer directly.
 *
 * Example 1:
 * Input: num1 = "2", num2 = "3"
 * Output: "6"
 *
 * Example 2:
 * Input: num1 = "123", num2 = "456"
 * Output: "56088"
 *
 * https://leetcode.com/problems/multiply-strings
 */
class MultiplyStrings
{
    /**
     * @param string $num1
     * @param string $num2
     * @return string
     */
    public function multiply(string $num1, string $num2): string
    {
        if ($num1 === '0' || $num2 === '0') {
            return '0';
        }
        $num1 = strrev($num1);
        $num2 = strrev($num2);
        $num1Length = strlen($num1);
        $num2Length = strlen($num2);
        $result = [];
        for ($secondNumIndex = 0; $secondNumIndex < $num2Length; $secondNumIndex++) {
            $carry = 0;
            $currentResult = [];
            $secondNumDigit = (int)$num2[$secondNumIndex];
            for ($i = 1; $i <= $secondNumIndex; $i++) {
                $currentResult[] = 0;
            }
            for ($firstNumIndex = 0; $firstNumIndex < $num1Length; $firstNumIndex++) {
                $firstNumDigit = (int)$num1[$firstNumIndex];
                $multiplication = $firstNumDigit * $secondNumDigit + $carry;
                $lastDigit = $multiplication % 10;
                $currentResult[] = $lastDigit;
                $carry = (int)($multiplication / 10);
            }
            if ($carry !== 0) {
                $currentResult[] = $carry;
            }
            $result[] = implode(array_reverse($currentResult));
        }

        $sum = $result[0];
        for ($i = 1, $iMax = count($result); $i < $iMax; $i++) {
            $sum = $this->addStrings($sum, $result[$i]);
        }
        return $sum;
    }

    /**
     * @param string $num1
     * @param string $num2
     * @return string
     */
    private function addStrings(string $num1, string $num2): string
    {
        $num1Index = strlen($num1) - 1;
        $num2Index = strlen($num2) - 1;
        $remainder = 0;
        $result = '';
        while ($num1Index >= 0 || $num2Index >= 0) {
            $digit1 = 0;
            if ($num1Index >= 0) {
                $digit1 = (int) $num1[$num1Index];
            }
            $digit2 = 0;
            if ($num2Index >= 0) {
                $digit2 = (int) $num2[$num2Index];
            }
            $result = (($digit1 + $digit2 + $remainder) % 10) . $result;
            $remainder = (int) (($digit1 + $digit2 + $remainder) / 10);
            $num1Index--;
            $num2Index--;
        }
        if ($remainder > 0) {
            $result = $remainder . $result;
        }
        return $result;
    }
}
