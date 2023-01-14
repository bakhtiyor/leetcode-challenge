<?php

namespace App;

/**
 * Combinations
 *
 * Given two integers n and k, return all possible combinations of k numbers chosen from the range [1, n]. You may
 * return the answer in any order.
 *
 * Example 1:
 * Input: n = 4, k = 2
 * Output: [[1,2],[1,3],[1,4],[2,3],[2,4],[3,4]]
 * Explanation: There are 4 choose 2 = 6 total combinations.
 * Note that combinations are unordered, i.e., [1,2] and [2,1] are considered to be the same combination.
 *
 * Example 2:
 * Input: n = 1, k = 1
 * Output: [[1]]
 * Explanation: There is 1 choose 1 = 1 total combination.
 *
 * https://leetcode.com/problems/combinations
 */
class Combinations
{
    /**
     * @param int $n
     * @param int $k
     * @return array<array-key, array<array-key, int>>
     */
    public function combine(int $n, int $k): array
    {
        $combinationArr = [];
        $this->backtrack($combinationArr, 1, $n, $k, []);
        return $combinationArr;
    }

    /**
     * @param array<array-key, array<array-key, int>> $combinationArr
     * @param int $start
     * @param int $n
     * @param int $k
     * @param array<array-key, int> $combination
     * @return void
     */
    private function backtrack(array &$combinationArr, int $start, int $n, int $k, array $combination): void
    {
        if (count($combination) === $k) {
            $combinationArr[] = $combination;
            return;
        }

        for ($i = $start; $i <= $n; $i++) {
            $combination[] = $i;
            $this->backtrack($combinationArr, $i + 1, $n, $k, $combination);
            array_pop($combination);
        }
    }
}
