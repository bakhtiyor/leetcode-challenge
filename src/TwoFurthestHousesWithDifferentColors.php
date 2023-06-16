<?php

namespace App;

/**
 * Two Furthest Houses With Different Colors
 *
 * There are n houses evenly lined up on the street, and each house is beautifully painted. You are given a 0-indexed
 * integer array colors of length n, where colors[i] represents the color of the it-h house. Return the maximum distance
 * between two houses with different colors. The distance between the i-th and j-th houses is abs(i - j), where abs(x)
 * is the absolute value of x.
 *
 * Example 1:
 * Input: colors = [1,1,1,6,1,1,1]
 * Output: 3
 * Explanation: In the above image, color 1 is blue, and color 6 is red.
 * The furthest two houses with different colors are house 0 and house 3.
 * House 0 has color 1, and house 3 has color 6. The distance between them is abs(0 - 3) = 3.
 * Note that houses 3 and 6 can also produce the optimal answer.
 *
 * Example 2:
 * Input: colors = [1,8,3,8,3]
 * Output: 4
 * Explanation: In the above image, color 1 is blue, color 8 is yellow, and color 3 is green.
 * The furthest two houses with different colors are house 0 and house 4.
 * House 0 has color 1, and house 4 has color 3. The distance between them is abs(0 - 4) = 4.
 *
 * Example 3:
 * Input: colors = [0,1]
 * Output: 1
 * Explanation: The furthest two houses with different colors are house 0 and house 1.
 * House 0 has color 0, and house 1 has color 1. The distance between them is abs(0 - 1) = 1.
 *
 * https://leetcode.com/problems/two-furthest-houses-with-different-colors
 */
class TwoFurthestHousesWithDifferentColors
{
    /**
     * @param array<int, int> $colors
     * @return int
     */
    public function maxDistance(array $colors): int
    {
        $result = 0;

        foreach ($colors as $k => $color) {
            foreach ($colors as $key => $col) {
                if ($color !== $col) {
                    $temp = max($key, $k) - min($key, $k);
                    $result = max($temp, $result);
                }
            }
        }
        return $result;
    }
}
