<?php

namespace App;

/**
 * Merge Similar Items
 *
 * You are given two 2D integer arrays, items1 and items2, representing two sets of items. Each array items has the
 * following properties:
 * - items[i] = [value_i, weight_i] where valuei represents the value and weight_i represents the weight of the ith item
 * - The value of each item in items is unique.
 * Return a 2D integer array ret where ret[i] = [value_i, weight_i], with weight_i being the sum of weights of all items
 * with value value_i.
 * Note: ret should be returned in ascending order by value.
 *
 * Example 1:
 * Input: items1 = [[1,1],[4,5],[3,8]], items2 = [[3,1],[1,5]]
 * Output: [[1,6],[3,9],[4,5]]
 * Explanation:
 * The item with value = 1 occurs in items1 with weight = 1 and in items2 with weight = 5, total weight = 1 + 5 = 6.
 * The item with value = 3 occurs in items1 with weight = 8 and in items2 with weight = 1, total weight = 8 + 1 = 9.
 * The item with value = 4 occurs in items1 with weight = 5, total weight = 5.
 * Therefore, we return [[1,6],[3,9],[4,5]].
 *
 * Example 2:
 * Input: items1 = [[1,1],[3,2],[2,3]], items2 = [[2,1],[3,2],[1,3]]
 * Output: [[1,4],[2,4],[3,4]]
 * Explanation:
 * The item with value = 1 occurs in items1 with weight = 1 and in items2 with weight = 3, total weight = 1 + 3 = 4.
 * The item with value = 2 occurs in items1 with weight = 3 and in items2 with weight = 1, total weight = 3 + 1 = 4.
 * The item with value = 3 occurs in items1 with weight = 2 and in items2 with weight = 2, total weight = 2 + 2 = 4.
 * Therefore, we return [[1,4],[2,4],[3,4]].
 *
 * https://leetcode.com/problems/merge-similar-items
 */
class MergeSimilarItems
{
    /**
     * @param int[][] $items1
     * @param int[][] $items2
     * @return int[][]
     */
    public function mergeSimilarItems(array $items1, array $items2): array
    {
        $hashItems = [];
        $mergedItems = [...$items1, ...$items2];
        foreach ($mergedItems as $item) {
            if (!isset($hashItems[$item[0]])) {
                $hashItems[$item[0]] = $item[1];
            } else {
                $hashItems[$item[0]] += $item[1];
            }
        }

        $keys = array_keys($hashItems);

        for ($i = 0, $iMax = count($keys); $i < $iMax; $i++) {
            for ($j = $i + 1; $j < $iMax; $j++) {
                if ($keys[$i] > $keys[$j]) {
                    $tmp = $keys[$j];
                    $keys[$j] = $keys[$i];
                    $keys[$i] = $tmp;
                }
            }
        }

        $resultHash = [];
        foreach ($keys as $key) {
            $resultHash[] = [$key, $hashItems[$key]];
        }
        return $resultHash;
    }
}
