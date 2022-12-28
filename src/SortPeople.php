<?php

namespace App;

/**
 * Sort the People
 *
 * You are given an array of strings names, and an array heights that consists of distinct positive integers. Both
 * arrays are of length n. For each index i, names[i] and heights[i] denote the name and height of the i-th person.
 * Return names sorted in descending order by the people's heights.
 *
 * Example 1:
 * Input: names = ["Mary","John","Emma"], heights = [180,165,170]
 * Output: ["Mary","Emma","John"]
 * Explanation: Mary is the tallest, followed by Emma and John.
 *
 * https://leetcode.com/problems/sort-the-people
 */
class SortPeople
{
    /**
     * @param array<array-key, string> $names
     * @param array<array-key, int> $heights
     * @return array<array-key, string>
     */
    public function sortPeople(array $names, array $heights): array
    {
        for ($i = 1; $i < count($heights); $i++) {
            $j = $i;
            while (($j > 0) && ($heights[$j] > $heights[$j - 1])) {
                $tmp = $heights[$j];
                $heights[$j] = $heights[$j - 1];
                $heights[$j - 1] = $tmp;

                $tmp = $names[$j];
                $names[$j] = $names[$j - 1];
                $names[$j - 1] = $tmp;
                $j--;
            }
        }
        return $names;
    }
}
