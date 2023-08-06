<?php

namespace App;

/**
 * Split a String in Balanced Strings
 *
 * Balanced strings are those that have an equal quantity of 'L' and 'R' characters. Given a balanced string s, split it
 * into some number of substrings such that:
 *  - Each substring is balanced.
 * Return the maximum number of balanced strings you can obtain.
 *
 * Example 1:
 * Input: s = "RLRRLLRLRL"
 * Output: 4
 * Explanation: s can be split into "RL", "RRLL", "RL", "RL", each substring contains same number of 'L' and 'R'.
 *
 * Example 2:
 * Input: s = "RLRRRLLRLL"
 * Output: 2
 * Explanation: s can be split into "RL", "RRRLLRLL", each substring contains same number of 'L' and 'R'.
 * Note that s cannot be split into "RL", "RR", "RL", "LR", "LL", because the 2nd and 5th substrings are not balanced.
 *
 * Example 3:
 * Input: s = "LLLLRRRR"
 * Output: 1
 * Explanation: s can be split into "LLLLRRRR".
 *
 * https://leetcode.com/problems/split-a-string-in-balanced-strings
 */
class SplitStringInBalancedStrings
{
    /**
     * @param string $str
     * @return int
     */
    public function balancedStringSplit(string $str): int
    {
        $count = 0;
        $balance = 0;
        for ($i = 0, $iMax = strlen($str); $i < $iMax; $i++) {
            $balance += $str[$i] === 'L' ? 1 : -1;
            if ($balance === 0) {
                $count++;
            }
        }
        return $count;
    }
}