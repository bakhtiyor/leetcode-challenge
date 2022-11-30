<?php

namespace App;

/**
 * Unique Number of Occurrences
 *
 * Given an array of integers arr, return true if the number of occurrences of each value in the array is unique,
 * or false otherwise.
 *
 * Example 1:
 * Input: arr = [1,2,2,1,1,3]
 * Output: true
 * Explanation: The value 1 has 3 occurrences, 2 has 2 and 3 has 1. No two values have the same number of occurrences.
 *
 * https://leetcode.com/problems/unique-number-of-occurrences
 */
class UniqueNumberOfOccurrence
{
    /**
     * @param array<array-key, int> $nums
     * @return bool
     */
    public function uniqueOccurrences(array $nums): bool
    {
        $numsHash = [];
        foreach ($nums as $num) {
            if (isset($numsHash[$num])) {
                $numsHash[$num]++;
            } else {
                $numsHash[$num] = 1;
            }
        }

        $valuesAlreadySeen = [];
        foreach ($numsHash as $numHash) {
            if (in_array($numHash, $valuesAlreadySeen, true)) {
                return false;
            }
            $valuesAlreadySeen[] = $numHash;
        }
        return true;
    }
}
