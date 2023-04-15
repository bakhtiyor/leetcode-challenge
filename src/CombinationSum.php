<?php

namespace App;

/**
 * Combination Sum
 *
 * Given an array of distinct integers candidates and a target integer target, return a list of all unique combinations
 * of candidates where the chosen numbers sum to target. You may return the combinations in any order.
 * The same number may be chosen from candidates an unlimited number of times. Two combinations are unique if the
 * frequency of at least one of the chosen numbers is different.
 * The test cases are generated such that the number of unique combinations that sum up to target is less than 150
 * combinations for the given input.
 *
 * Example 1:
 * Input: candidates = [2,3,6,7], target = 7
 * Output: [[2,2,3],[7]]
 * Explanation:
 * 2 and 3 are candidates, and 2 + 2 + 3 = 7. Note that 2 can be used multiple times.
 * 7 is a candidate, and 7 = 7.
 * These are the only two combinations.
 *
 * Example 2:
 * Input: candidates = [2,3,5], target = 8
 * Output: [[2,2,2,2],[2,3,3],[3,5]]
 *
 * Example 3:
 * Input: candidates = [2], target = 1
 * Output: []
 *
 * https://leetcode.com/problems/combination-sum/description
 */
class CombinationSum
{
    /** @var int[] $candidates */
    private array $candidates = [];
    private int $target = 0;

    /**
     * @param int[] $candidates
     * @param int $target
     * @return int[][]
     */
    public function combinationSum(array $candidates, int $target): array
    {
        $list = [];
        $this->candidates = $candidates;
        $this->target = $target;
        $this->backtrack($list, [], 0);

        return $list;
    }


    /**
     * @param int[][] $list
     * @param int[] $try
     * @param int $start
     */
    private function backtrack(array &$list, array $try, int $start): void
    {
        $sum = 0;
        foreach ($try as $t) {
            $sum += $t;
        }

        if ($sum === $this->target) {
            $list[] = $try;

            return;
        }

        if ($sum > $this->target) {
            return;
        }

        for ($i = $start, $iMax = count($this->candidates); $i < $iMax; $i++) {
            $try[] = $this->candidates[$i];
            $this->backtrack($list, $try, $i);
            array_pop($try);
        }
    }
}
