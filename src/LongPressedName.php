<?php

namespace App;

/**
 * Long Pressed Name
 *
 * Your friend is typing his name into a keyboard. Sometimes, when typing a character c, the key might get long pressed,
 * and the character will be typed 1 or more times. You examine the typed characters of the keyboard. Return True if it
 * is possible that it was your friends name, with some characters (possibly none) being long pressed.
 *
 * Example 1:
 * Input: name = "alex", typed = "aaleex"
 * Output: true
 * Explanation: 'a' and 'e' in 'alex' were long pressed.
 *
 * Example 2:
 * Input: name = "saeed", typed = "ssaaedd"
 * Output: false
 * Explanation: 'e' must have been pressed twice, but it was not in the typed output.
 *
 * https://leetcode.com/problems/long-pressed-name
 */
class LongPressedName
{
    /**
     * @param string $name
     * @param string $typed
     * @return bool
     */
    public function isLongPressedName(string $name, string $typed): bool
    {
        if (strlen($name) > strlen($typed)) {
            return false;
        }
        $nameLength = strlen($name);
        $typedLength = strlen($typed);
        $nameIndex = 0;
        $typedIndex = 0;
        while ($typedIndex < $typedLength) {
            if ($nameIndex < $nameLength && $name[$nameIndex] === $typed[$typedIndex]) {
                $nameIndex++;
            } elseif ($typedIndex === 0 || $typed[$typedIndex] !== $typed[$typedIndex - 1]) {
                return false;
            }
            $typedIndex++;
        }
        return $nameIndex === $nameLength;
    }
}
