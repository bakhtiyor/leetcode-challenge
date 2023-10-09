<?php

namespace App;

/**
 * Maximize Distance to Closest Person
 *
 * You are given an array representing a row of seats where seats[i] = 1 represents a person sitting in the i-th seat,
 * and seats[i] = 0 represents that the i-th seat is empty (0-indexed).
 * There is at least one empty seat, and at least one person sitting.
 * Alex wants to sit in the seat such that the distance between him and the closest person to him is maximized.
 * Return that maximum distance to the closest person.
 *
 * Example 1:
 * Input: seats = [1,0,0,0,1,0,1]
 * Output: 2
 * Explanation:
 * If Alex sits in the second open seat (i.e. seats[2]), then the closest person has distance 2.
 * If Alex sits in any other open seat, the closest person has distance 1.
 * Thus, the maximum distance to the closest person is 2.
 *
 * Example 2:
 * Input: seats = [1,0,0,0]
 * Output: 3
 * Explanation:
 * If Alex sits in the last seat (i.e. seats[3]), the closest person is 3 seats away.
 * This is the maximum distance possible, so the answer is 3.
 *
 * Example 3:
 * Input: seats = [0,1]
 * Output: 1
 *
 * https://leetcode.com/problems/maximize-distance-to-closest-person
 */
class MaximizeDistanceToClosestPerson
{
    /**
     * @param int[] $seats
     * @return int
     */
    public function maxDistToClosest(array $seats): int
    {
        $max = 0;
        $prev = null;
        $count = 0;
        foreach ($seats as $seat) {
            if ($seat === 1) {
                if ($prev === null) {
                    $max = max($max, $count);
                } else {
                    $max = max($max, (int)ceil($count / 2));
                }
                $count = 0;
                $prev = 1;
            } else {
                $count++;
            }
        }
        return max($max, $count);
    }
}
