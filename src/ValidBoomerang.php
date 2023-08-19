<?php

namespace App;

/**
 * Valid Boomerang
 *
 * Given an array points where points[i] = [x_i, y_i] represents a point on the X-Y plane, return true if these points
 * are a boomerang. A boomerang is a set of three points that are all distinct and not in a straight line.
 *
 * Example 1:
 * Input: points = [[1,1],[2,3],[3,2]]
 * Output: true
 *
 * Example 2:
 * Input: points = [[1,1],[2,2],[3,3]]
 * Output: false
 *
 * https://leetcode.com/problems/valid-boomerang
 */
class ValidBoomerang
{
    /**
     * @param int[][] $points
     * @return bool
     */
    public function isBoomerang(array $points): bool
    {
        $x1 = $points[0][0];
        $y1 = $points[0][1];
        $x2 = $points[1][0];
        $y2 = $points[1][1];
        $x3 = $points[2][0];
        $y3 = $points[2][1];

        return ($x1 * ($y2 - $y3) + $x2 * ($y3 - $y1) + $x3 * ($y1 - $y2)) !== 0;
    }
}
