<?php

namespace App;

/**
 * Expressive Words
 *
 * Sometimes people repeat letters to represent extra feeling. For example:
 * "hello" -> "heeellooo"
 * "hi" -> "hiiii"
 * In these strings like "heeellooo", we have groups of adjacent letters that are all the same: "h", "eee", "ll", "ooo".
 * You are given a string s and an array of query strings words. A query word is stretchy if it can be made to be equal
 * to s by any number of applications of the following extension operation: choose a group consisting of characters c,
 * and add some number of characters c to the group so that the size of the group is three or more.
 * For example, starting with "hello", we could do an extension on the group "o" to get "hellooo", but we cannot get
 * "helloo" since the group "oo" has a size less than three. Also, we could do another extension like "ll" -> "lllll"
 * to get "helllllooo". If s = "helllllooo", then the query word "hello" would be stretchy because of these two
 * extension operations: query = "hello" -> "hellooo" -> "helllllooo" = s.
 * Return the number of query strings that are stretchy.
 *
 * Example 1:
 * Input: s = "heeellooo", words = ["hello", "hi", "helo"]
 * Output: 1
 * Explanation:
 * We can extend "e" and "o" in the word "hello" to get "heeellooo".
 * We can't extend "helo" to get "heeellooo" because the group "ll" is not size 3 or more.
 *
 * Example 2:
 * Input: s = "zzzzzyyyyy", words = ["zzyy","zy","zyy"]
 * Output: 3
 *
 * https://leetcode.com/problems/expressive-words
 */
class ExpressiveWords
{
    /**
     * @param string $str
     * @param string[] $words
     * @return int
     */
    public function expressiveWords(string $str, array $words): int
    {
        $count = 0;
        foreach ($words as $word) {
            if ($this->isStretchy($str, $word)) {
                $count++;
            }
        }
        return $count;
    }

    private function isStretchy(string $str, string $word): bool
    {
        $i = 0;
        $j = 0;
        $n = strlen($str);
        $m = strlen($word);
        while ($i < $n && $j < $m) {
            if ($str[$i] !== $word[$j]) {
                return false;
            }
            $len1 = $this->getRepeatLength($str, $i);
            $len2 = $this->getRepeatLength($word, $j);
            if (($len1 < 3 && $len1 !== $len2) || ($len1 >= 3 && $len1 < $len2)) {
                return false;
            }
            $i += $len1;
            $j += $len2;
        }
        return $i === $n && $j === $m;
    }

    private function getRepeatLength(string $str, int $i): int
    {
        $j = $i;
        while ($j < strlen($str) && $str[$j] === $str[$i]) {
            $j++;
        }
        return $j - $i;
    }
}
