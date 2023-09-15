<?php

namespace App;

/**
 * Two City Scheduling
 *
 * A company is planning to interview 2n people. Given the array costs where costs[i] = [aCost_i, bCost_i], the cost of
 * flying the ith person to city a is aCost_i, and the cost of flying the ith person to city b is bCost_i.
 * Return the minimum cost to fly every person to a city such that exactly n people arrive in each city.
 *
 * Example 1:
 * Input: costs = [[10,20],[30,200],[400,50],[30,20]]
 * Output: 110
 * Explanation:
 * The first person goes to city A for a cost of 10.
 * The second person goes to city A for a cost of 30.
 * The third person goes to city B for a cost of 50.
 * The fourth person goes to city B for a cost of 20.
 * The total minimum cost is 10 + 30 + 50 + 20 = 110 to have half the people interviewing in each city.
 *
 * Example 2:
 * Input: costs = [[259,770],[448,54],[926,667],[184,139],[840,118],[577,469]]
 * Output: 1859
 * Example 3:
 * Input: costs = [[515,563],[451,713],[537,709],[343,819],[855,779],[457,60],[650,359],[631,42]]
 * Output: 3086
 *
 * https://leetcode.com/problems/two-city-scheduling/description
 */
class TwoCityScheduling
{
    /**
     * @param int[][] $costs
     * @return int
     */
    public function twoCitySchedCost(array $costs): int
    {
        $n = (int) (count($costs) / 2);
        $dp = array_fill(0, $n + 1, array_fill(0, $n + 1, 0));
        for ($i = 1; $i <= $n; $i++) {
            $dp[$i][0] = $dp[$i - 1][0] + $costs[$i - 1][0];
        }
        for ($j = 1; $j <= $n; $j++) {
            $dp[0][$j] = $dp[0][$j - 1] + $costs[$j - 1][1];
        }
        for ($i = 1; $i <= $n; $i++) {
            for ($j = 1; $j <= $n; $j++) {
                $dp[$i][$j] = min($dp[$i - 1][$j] + $costs[$i + $j - 1][0], $dp[$i][$j - 1] + $costs[$i + $j - 1][1]);
            }
        }
        return $dp[$n][$n];
    }
}
