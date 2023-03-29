<?php

namespace App;

/**
 * Decode the Message
 *
 * You are given the strings key and message, which represent a cipher key and a secret message, respectively. The steps
 * to decode message are as follows:
 * - Use the first appearance of all 26 lowercase English letters in key as the order of the substitution table.
 * - Align the substitution table with the regular English alphabet.
 * - Each letter in message is then substituted using the table.
 * - Spaces ' ' are transformed to themselves.
 * For example, given key = "happy boy" (actual key would have at least one instance of each letter in the alphabet),
 * we have the partial substitution table of ('h' -> 'a', 'a' -> 'b', 'p' -> 'c', 'y' -> 'd', 'b' -> 'e', 'o' -> 'f').
 * Return the decoded message.
 *
 * Example 1:
 * Input: key = "the quick brown fox jumps over the lazy dog", message = "vkbs bs t suepuv"
 * Output: "this is a secret"
 * Explanation: The diagram above shows the substitution table.
 * It is obtained by taking the first appearance of each letter in "the quick brown fox jumps over the lazy dog".
 *
 * Example 2:
 * Input: key = "eljuxhpwnyrdgtqkviszcfmabo", message = "zwx hnfx lqantp mnoeius ycgk vcnjrdb"
 * Output: "the five boxing wizards jump quickly"
 * Explanation: The diagram above shows the substitution table.
 * It is obtained by taking the first appearance of each letter in "eljuxhpwnyrdgtqkviszcfmabo".
 *
 * https://leetcode.com/problems/decode-the-message
 */
class DecodeMessage
{
    /**
     * @param string $key
     * @param string $message
     * @return string
     */
    public function decodeMessage(string $key, string $message): string
    {
        $table = [];
        $index = 0;
        for ($i = 0, $iMax = strlen($key); $i < $iMax; $i++) {
            if ($key[$i] !== ' ' && !isset($table[$key[$i]])) {
                $table[$key[$i]] = chr(97 + $index);
                $index++;
            }
        }
        $output = '';
        for ($i = 0, $iMax = strlen($message); $i < $iMax; $i++) {
            if ($message[$i] === ' ') {
                $output .= ' ';
            } elseif (isset($table[$message[$i]])) {
                $output .= $table[$message[$i]];
            }
        }
        return $output;
    }
}
