<?php

namespace App;

/**
 * Count Common Words With One Occurrence
 *
 * Given two string arrays words1 and words2, return the number of strings that appear exactly once in each of the two
 * arrays.
 *
 * Example 1:
 * Input: words1 = ["leetcode","is","amazing","as","is"], words2 = ["amazing","leetcode","is"]
 * Output: 2
 * Explanation:
 * - "leetcode" appears exactly once in each of the two arrays. We count this string.
 * - "amazing" appears exactly once in each of the two arrays. We count this string.
 * - "is" appears in each of the two arrays, but there are 2 occurrences of it in words1. We do not count this string.
 * - "as" appears once in words1, but does not appear in words2. We do not count this string.
 * Thus, there are 2 strings that appear exactly once in each of the two arrays.
 *
 * Example 2:
 * Input: words1 = ["b","bb","bbb"], words2 = ["a","aa","aaa"]
 * Output: 0
 * Explanation: There are no strings that appear in each of the two arrays.
 *
 * Example 3:
 * Input: words1 = ["a","ab"], words2 = ["a","a","a","ab"]
 * Output: 1
 * Explanation: The only string that appears exactly once in each of the two arrays is "ab".
 *
 * https://leetcode.com/problems/count-common-words-with-one-occurrence
 */
class CountCommonWordsWithOneOccurrence
{
    /**
     * @param string[] $words1
     * @param string[] $words2
     * @return int
     */
    public function countWords(array $words1, array $words2): int
    {
        $words1 = array_count_values($words1);
        $words2 = array_count_values($words2);

        $count = 0;
        foreach ($words1 as $word => $occurrence) {
            if ($occurrence === 1 && isset($words2[$word]) && $words2[$word] === 1) {
                $count++;
            }
        }

        return $count;
    }
}
