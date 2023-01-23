<?php

namespace App;

/**
 * Find the Town Judge
 *
 * In a town, there are n people labeled from 1 to n. There is a rumor that one of these people is secretly the town
 * judge. If the town judge exists, then:
 * 1. The town judge trusts nobody.
 * 2. Everybody (except for the town judge) trusts the town judge.
 * There is exactly one person that satisfies properties 1 and 2.
 * You are given an array trust where trust[i] = [a_i, b_i] representing that the person labeled a_i trusts
 * the person labeled b_i.
 * Return the label of the town judge if the town judge exists and can be identified, or return -1 otherwise.
 *
 * Example 1:
 * Input: n = 2, trust = [[1,2]]
 * Output: 2
 *
 * Example 2:
 * Input: n = 3, trust = [[1,3],[2,3]]
 * Output: 3
 *
 * Example 3:
 * Input: n = 3, trust = [[1,3],[2,3],[3,1]]
 * Output: -1
 *
 * https://leetcode.com/problems/find-the-town-judge
 */
class FindTheTownJudge
{
    /**
     * @param int $n
     * @param array<array-key, array<array-key, int>> $trust
     * @return int
     */
    public function findJudge(int $n, array $trust): int
    {
        $freq = array_fill(0, $n + 1, 0);
        foreach ($trust as $person) {
            $freq[$person[0]]--;
            $freq[$person[1]]++;
        }
        for ($i = 1; $i <= $n; $i++) {
            if ($freq[$i] === $n - 1) {
                return $i;
            }
        }
        return -1;
    }
}
