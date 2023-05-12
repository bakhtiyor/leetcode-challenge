<?php

namespace App;

/**
 * Maximum Population Year
 *
 * You are given a 2D integer array logs where each logs[i] = [birth_i, death_i] indicates the birth and death years of
 * the i-th person. The population of some year x is the number of people alive during that year. The i-th person is
 * counted in year x's population if x is in the inclusive range [birth_i, death_i - 1]. Note that the person is not
 * counted in the year that they die. Return the earliest year with the maximum population.
 *
 * Example 1:
 * Input: logs = [[1993,1999],[2000,2010]]
 * Output: 1993
 * Explanation: The maximum population is 1, and 1993 is the earliest year with this population.
 *
 * Example 2:
 * Input: logs = [[1950,1961],[1960,1971],[1970,1981]]
 * Output: 1960
 * Explanation:
 * The maximum population is 2, and it had happened in years 1960 and 1970.
 * The earlier year between them is 1960.
 *
 * https://leetcode.com/problems/maximum-population-year
 */
class MaximumPopulationYear
{
    /**
     * @param int[][] $logs
     * @return int
     */
    public function maximumPopulation(array $logs): int
    {
        $delta = array_fill(0, 101, 0);
        $conversionDiff = 1950;

        foreach ($logs as $log) {
            $delta[$log[0] - $conversionDiff]++;
            $delta[$log[1] - $conversionDiff]--;
        }

        $runningSum = 0;
        $maxPop = 0;
        $year = 1950;

        for ($i = 0, $iMax = count($delta); $i < $iMax; $i++) {
            $runningSum += $delta[$i];

            if ($runningSum > $maxPop) {
                $maxPop = $runningSum;
                $year = $conversionDiff + $i;
            }
        }

        return $year;
    }
}
