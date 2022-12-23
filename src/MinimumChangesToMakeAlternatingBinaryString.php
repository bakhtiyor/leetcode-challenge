<?php

namespace App;

/**
 * Minimum Changes To Make Alternating Binary String
 *
 * You are given a string s consisting only of the characters '0' and '1'. In one operation, you can change any '0' to
 * '1' or vice versa. The string is called alternating if no two adjacent characters are equal. For example, the string
 * "010" is alternating, while the string "0100" is not.
 * Return the minimum number of operations needed to make s alternating.
 *
 * Example 1:
 * Input: s = "0100"
 * Output: 1
 * Explanation: If you change the last character to '1', s will be "0101", which is alternating.
 *
 * Example 2:
 * Input: s = "1111"
 * Output: 2
 * Explanation: You need two operations to reach "0101" or "1010".
 *
 * https://leetcode.com/problems/minimum-changes-to-make-alternating-binary-string
 */
class MinimumChangesToMakeAlternatingBinaryString
{
    /**
     * @param string $str
     * @return int
     */
    public function minOperations(string $str): int
    {
        $numAlterations1 = 0;
        $numAlterations2 = 0;
        for ($i = 0; $i < strlen($str); $i++) {
            if (($i % 2 === 0 && $str[$i] === '1') || ($i % 2 === 1 && $str[$i] === '0')) {
                $numAlterations1++;
            }
            if (($i % 2 === 0 && $str[$i] === '0') || ($i % 2 === 1 && $str[$i] === '1')) {
                $numAlterations2++;
            }
        }
        return min($numAlterations1, $numAlterations2);
    }
}
