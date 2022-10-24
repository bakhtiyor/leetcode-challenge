<?php

namespace App;

/**
 * Valid Parentheses
 *
 * Given a string s containing just the characters '(', ')', '{', '}', '[' and ']', determine if the input string
 * is valid. An input string is valid if:
 * Open brackets must be closed by the same type of brackets.
 * Open brackets must be closed in the correct order.
 * Every close bracket has a corresponding open bracket of the same type.
 * Example 1:
 * Input: s = "()" Output: true
 * Example 2:
 * Input: s = "()[]{}" Output: true
 * Example 3:
 * Input: s = "(]" Output: false
 *
 * https://leetcode.com/problems/valid-parentheses
 */
class ValidParentheses
{
    /**
     * @param string $str
     * @return bool
     */
    public function isValid(string $str): bool
    {
        /** @var array<array-key, string> $stack */
        $stack = [];
        for ($i = 0, $iMax = strlen($str); $i < $iMax; $i++) {
            $stackCount = count($stack);
            if (in_array($str[$i], ['(', '{', '['], true)) {
                $stack[] = $str[$i];
            } elseif (
                (count($stack) === 0) ||
                (
                    ($stack[$stackCount - 1] === '(' && $str[$i] !== ')') ||
                    ($stack[$stackCount - 1] === '{' && $str[$i] !== '}') ||
                    ($stack[$stackCount - 1] === '[' && $str[$i] !== ']')
                )
            ) {
                return false;
            } else {
                array_pop($stack);
            }
        }
        return count($stack) === 0;
    }
}
