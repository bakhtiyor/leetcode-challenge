<?php

namespace App;

/**
 * Maximum Number of Balloons
 *
 * Given a string text, you want to use the characters of text to form as many instances of the word "balloon" as
 * possible. You can use each character in text at most once. Return the maximum number of instances that can be formed.
 *
 * Example 1:
 * Input: text = "nlaebolko"
 * Output: 1
 *
 * Example 2:
 * Input: text = "loonbalxballpoon"
 * Output: 2
 *
 * Example 3:
 * Input: text = "leetcode"
 * Output: 0
 *
 * https://leetcode.com/problems/maximum-number-of-balloons
 */
class MaximumNumberOfBalloons
{
    /**
     * @param string $text
     * @return int
     */
    public function maxNumberOfBalloons(string $text): int
    {
        $hash = ['b' => 0, 'a' => 0, 'l' => 0, 'o' => 0, 'n' => 0,];

        $length = strlen($text);
        for ($i = 0; $i < $length; $i++) {
            if (isset($hash[$text[$i]])) {
                $hash[$text[$i]]++;
            }
        }

        return min($hash['b'], $hash['a'], (int) ($hash['l'] / 2), (int) ($hash['o'] / 2), $hash['n']);
    }
}
