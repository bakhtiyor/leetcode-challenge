<?php

namespace App;

/**
 * Surface Area of 3D Shapes
 *
 * You are given an n x n grid where you have placed some 1 x 1 x 1 cubes. Each value v = grid[i][j] represents a tower
 * of v cubes placed on top of cell (i, j). After placing these cubes, you have decided to glue any directly adjacent
 * cubes to each other, forming several irregular 3D shapes. Return the total surface area of the resulting shapes.
 * Note: The bottom face of each shape counts toward its surface area.
 *
 * Example 1:
 * Input: grid = [[1,2],[3,4]]
 * Output: 34
 *
 * Example 2:
 * Input: grid = [[1,1,1],[1,0,1],[1,1,1]]
 * Output: 32
 *
 * Example 3:
 * Input: grid = [[2,2,2],[2,1,2],[2,2,2]]
 * Output: 46
 *
 * https://leetcode.com/problems/surface-area-of-3d-shapes
 */
class SurfaceAreaOf3DShapes
{
    /**
     * @param int[][] $grid
     * @return int
     */
    public function surfaceArea(array $grid): int
    {
        $area = 0;
        $n = count($grid);
        for ($i = 0; $i < $n; $i++) {
            for ($j = 0, $jMax = count($grid[$i]); $j < $jMax; $j++) {
                if ($grid[$i][$j] > 0) {
                    $area += $grid[$i][$j] * 4 + 2;
                }
                if ($i > 0) {
                    $area -= min($grid[$i][$j], $grid[$i - 1][$j]) * 2;
                }
                if ($j > 0) {
                    $area -= min($grid[$i][$j], $grid[$i][$j - 1]) * 2;
                }
            }
        }
        return $area;
    }
}
