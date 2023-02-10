<?php

namespace App;

use SplQueue;

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
    // Four directions: Up, Down, Left and Right.
    /** @var array<array-key, array<array-key, int>> */
    private array $direction = [[-1, 0], [1, 0], [0, -1], [0, 1]];

    /**
     * @param array<array-key, array<array-key, int>> $grid
     * @return int
     */
    public function maxDistance(array $grid): int
    {
        // A copy matrix of the grid to mark water cells as land once visited.
        $visited = array_map(static fn($row) => $row, $grid);

        // Insert all the land cells in the queue.
        $q = new SplQueue();
        for ($i = 0, $iMax = count($grid); $i < $iMax; $i++) {
            for ($j = 0, $jMax = count($grid[0]); $j < $jMax; $j++) {
                // Copy grid to the visited matrix.
                $visited[$i][$j] = $grid[$i][$j];
                if ($grid[$i][$j] === 1) {
                    $q->enqueue([$i, $j]);
                }
            }
        }

        $distance = -1;
        while (!$q->isEmpty()) {
            $qSize = $q->count();

            // Iterate over all the current cells in the queue.
            while ($qSize-- > 0) {
                /** @var array<array-key, int> $landCell */
                $landCell = $q->dequeue();

                // From the current land cell, traverse to all the four directions
                // and check if it is a water cell. If yes, convert it to land
                // and add it to the queue.
                foreach ($this->direction as $dir) {
                    $x = $landCell[0] + $dir[0];
                    $y = $landCell[1] + $dir[1];

                    if ($x >= 0 && $y >= 0 && $x < count($grid) && $y < count($grid[0]) && $visited[$x][$y] === 0) {
                        // Marking as 1 to avoid re-iterating it.
                        $visited[$x][$y] = 1;
                        $q->enqueue([$x, $y]);
                    }
                }
            }

            // After each iteration of queue elements, increment distance
            // as we covered 1 unit distance from all cells in every direction.
            $distance++;
        }

        // If the distance is 0, there is no water cell.
        return $distance === 0 ? -1 : $distance;
    }
}
