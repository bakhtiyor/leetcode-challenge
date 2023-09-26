<?php

namespace App;

/**
 * Asteroid Collision
 *
 * We are given an array asteroids of integers representing asteroids in a row. For each asteroid, the absolute value
 * represents its size, and the sign represents its direction (positive meaning right, negative meaning left). Each
 * asteroid moves at the same speed. Find out the state of the asteroids after all collisions. If two asteroids meet,
 * the smaller one will explode. If both are the same size, both will explode. Two asteroids moving in the same
 * direction will never meet.
 *
 * Example 1:
 * Input: asteroids = [5,10,-5]
 * Output: [5,10]
 * Explanation: The 10 and -5 collide resulting in 10. The 5 and 10 never collide.
 *
 * Example 2:
 * Input: asteroids = [8,-8]
 * Output: []
 * Explanation: The 8 and -8 collide exploding each other.
 *
 * Example 3:
 * Input: asteroids = [10,2,-5]
 * Output: [10]
 * Explanation: The 2 and -5 collide resulting in -5. The 10 and -5 collide resulting in 10.
 *
 * https://leetcode.com/problems/asteroid-collision
 */
class AsteroidCollision
{
    /**
     * @param int[] $asteroids
     * @return int[]
     */
    public function asteroidCollision(array $asteroids): array
    {
        $stack = [];
        foreach ($asteroids as $asteroid) {
            if ($asteroid > 0) {
                $stack[] = $asteroid;
            } else {
                while (!empty($stack) && end($stack) > 0 && end($stack) < abs($asteroid)) {
                    array_pop($stack);
                }
                if (empty($stack) || end($stack) < 0) {
                    $stack[] = $asteroid;
                } elseif (end($stack) === abs($asteroid)) {
                    array_pop($stack);
                }
            }
        }
        return $stack;
    }
}
