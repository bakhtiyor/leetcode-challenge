<?php

namespace App;

/**
 * Island Perimeter
 *
 * You are given row x col grid representing a map where grid[i][j] = 1 represents land and grid[i][j] = 0 represents
 * water. Grid cells are connected horizontally/vertically (not diagonally). The grid is completely surrounded by water,
 * and there is exactly one island (i.e., one or more connected land cells). The island doesn't have "lakes", meaning
 * the water inside isn't connected to the water around the island. One cell is a square with side length 1. The grid is
 * rectangular, width and height don't exceed 100. Determine the perimeter of the island.
 *
 * Example 1:
 * Input: grid = [[0,1,0,0],[1,1,1,0],[0,1,0,0],[1,1,0,0]]
 * Output: 16
 * Explanation: The perimeter is the 16 yellow stripes in the image above.
 *
 * Example 2:
 * Input: grid = [[1]]
 * Output: 4
 *
 * Example 3:
 * Input: grid = [[1,0]]
 * Output: 4
 *
 * https://leetcode.com/problems/island-perimeter
 */
class IslandPerimeter
{
    /**
     * @param array<array-key, array<array-key, int>> $grid
     * @return int
     */
    public function islandPerimeter(array $grid): int
    {
        $perimeter = 0;
        for ($row = 0, $rowMax = count($grid); $row < $rowMax; $row++) {
            for ($col = 0, $colMax = count($grid[0]); $col < $colMax; $col++) {
                if ($grid[$row][$col] === 1) {
                    $perimeter += 4 - $this->getNumberOfNeighbors($grid, $row, $col);
                }
            }
        }
        return $perimeter;
    }

    /**
     * @param array<array-key, array<array-key, int>> $grid
     * @param int $row
     * @param int $col
     * @return int
     */
    private function getNumberOfNeighbors(array $grid, int $row, int $col): int
    {
        $numNeighbors = 0;
        if ($row > 0 && $grid[$row - 1][$col] === 1) {
            $numNeighbors++;
        }
        if ($row < count($grid) - 1 && $grid[$row + 1][$col] === 1) {
            $numNeighbors++;
        }
        if ($col > 0 && $grid[$row][$col - 1] === 1) {
            $numNeighbors++;
        }
        if ($col < count($grid[0]) - 1 && $grid[$row][$col + 1] === 1) {
            $numNeighbors++;
        }
        return $numNeighbors;
    }
}
