<?php

namespace App;

/**
 * As Far from Land as Possible
 *
 * Given an n x n grid containing only values 0 and 1, where 0 represents water and 1 represents land, find a water cell
 * such that its distance to the nearest land cell is maximized, and return the distance. If no land or water exists in
 * the grid, return -1. The distance used in this problem is the Manhattan distance: the distance between two cells
 * (x0, y0) and (x1, y1) is |x0 - x1| + |y0 - y1|.
 *
 * Example 1:
 * Input: grid = [[1,0,1],[0,0,0],[1,0,1]]
 * Output: 2
 * Explanation: The cell (1, 1) is as far as possible from all the land with distance 2.
 *
 * Example 2:
 * Input: grid = [[1,0,0],[0,0,0],[0,0,0]]
 * Output: 4
 * Explanation: The cell (2, 2) is as far as possible from all the land with distance 4.
 *
 * https://leetcode.com/problems/as-far-from-land-as-possible
 */
class AsFarFromLandAsPossible
{
    /**
     * @param array<array-key, int> $grid
     * @return int
     */
    public function maxDistance(array $grid): int
    {
        return 1;
    }
}