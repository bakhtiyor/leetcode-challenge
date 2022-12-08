<?php

namespace App;
/**
 * Height Checker
 *
 * A school is trying to take an annual photo of all the students. The students are asked to stand in a single file
 * line in non-decreasing order by height. Let this ordering be represented by the integer array expected where
 * expected[i] is the expected height of the ith student in line. You are given an integer array heights representing
 * the current order that the students are standing in. Each heights[i] is the height of the ith student in line
 * (0-indexed). Return the number of indices where heights[i] != expected[i].
 *
 * Example 1:
 * Input: heights = [1,1,4,2,1,3]
 * Output: 3
 * Explanation:
 * heights:  [1,1,4,2,1,3]
 * expected: [1,1,1,2,3,4]
 * Indices 2, 4, and 5 do not match.
 *
 * https://leetcode.com/problems/height-checker
 */
class HeightChecker
{
    /**
     * @param array $heights
     * @return int
     */
    public function heightChecker(array $heights): int
    {
        $heightsSorted = $heights;
        sort($heightsSorted);
        $wrongIndex = 0;
        for ($i = 0, $iMax = count($heights); $i < $iMax; $i++) {
            if ($heights[$i] !== $heightsSorted[$i]) {
                $wrongIndex++;
            }
        }
        return $wrongIndex;
    }
}
