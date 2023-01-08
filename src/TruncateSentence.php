<?php

namespace App;

/**
 * Truncate Sentence
 *
 * A sentence is a list of words that are separated by a single space with no leading or trailing spaces. Each of the
 * words consists of only uppercase and lowercase English letters (no punctuation). For example, "Hello World", "HELLO",
 * and "hello world hello world" are all sentences. You are given a sentence s and an integer k. You want to truncate
 * s such that it contains only the first k words. Return s after truncating it.
 *
 * Example 1:
 * Input: s = "Hello how are you Contestant", k = 4
 * Output: "Hello how are you"
 *
 * Example 2:
 * Input: s = "What is the solution to this problem", k = 4
 * Output: "What is the solution"
 *
 * https://leetcode.com/problems/truncate-sentence
 */
class TruncateSentence
{
    /**
     * @param string $str
     * @param int $k
     * @return string
     */
    public function truncateSentence(string $str, int $k): string
    {
        $strArr = explode(' ', $str);
        return implode(' ', array_splice($strArr, 0, $k));
    }
}
