<?php

namespace App;

/**
 * 2 Keys Keyboard
 *
 * There is only one character 'A' on the screen of a notepad. You can perform one of two operations on this notepad for
 * each step:
 *  - Copy All: You can copy all the characters present on the screen (a partial copy is not allowed).
 *  - Paste: You can paste the characters which are copied last time.
 * Given an integer n, return the minimum number of operations to get the character 'A' exactly n times on the screen.
 *
 * Example 1:
 * Input: n = 3
 * Output: 3
 * Explanation: Initially, we have one character 'A'.
 * In step 1, we use Copy All operation.
 * In step 2, we use Paste operation to get 'AA'.
 * In step 3, we use Paste operation to get 'AAA'.
 *
 * Example 2:
 * Input: n = 1
 * Output: 0
 *
 * https://leetcode.com/problems/2-keys-keyboard
 */
class TwoKeysKeyboard
{
    /**
     * @param int $num
     * @return int
     */
    public function minSteps(int $num): int
    {
        $dp = array_fill(0, $num + 1, 0);
        for ($i = 2; $i <= $num; $i++) {
            $dp[$i] = $i;
            for ($j = $i - 1; $j > 1; $j--) {
                if ($i % $j === 0) {
                    $dp[$i] = $dp[$j] + ($i / $j);
                    break;
                }
            }
        }
        return (int) $dp[$num];
    }
}
