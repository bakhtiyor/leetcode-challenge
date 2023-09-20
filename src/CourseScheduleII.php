<?php

namespace App;

use SplQueue;

/**
 * Course Schedule II
 *
 * There are a total of numCourses courses you have to take, labeled from 0 to numCourses - 1. You are given an array
 * prerequisites where prerequisites[i] = [a_i, b_i] indicates that you must take course b_i first if you want to take
 * course a_i.
 * For example, the pair [0, 1], indicates that to take course 0 you have to first take course 1.
 * Return the ordering of courses you should take to finish all courses. If there are many valid answers, return any of
 * them. If it is impossible to finish all courses, return an empty array.
 *
 * Example 1:
 * Input: numCourses = 2, prerequisites = [[1,0]]
 * Output: [0,1]
 * Explanation: There are a total of 2 courses to take. To take course 1 you should have finished course 0. So the
 * correct course order is [0,1].
 *
 * Example 2:
 * Input: numCourses = 4, prerequisites = [[1,0],[2,0],[3,1],[3,2]]
 * Output: [0,2,1,3]
 * Explanation: There are a total of 4 courses to take. To take course 3 you should have finished both courses 1 and 2.
 * Both courses 1 and 2 should be taken after you finished course 0.
 * So one correct course order is [0,1,2,3]. Another correct ordering is [0,2,1,3].
 *
 * Example 3:
 * Input: numCourses = 1, prerequisites = []
 * Output: [0]
 *
 * https://leetcode.com/problems/course-schedule-ii
 */
class CourseScheduleII
{
    /**
     * @param int $numCourses
     * @param array $prerequisites
     * @return array
     */
    public function findOrder(int $numCourses, array $prerequisites): array
    {
        $graph = [];
        $inDegree = array_fill(0, $numCourses, 0);
        $queue = new SplQueue();
        $result = [];

        /** @var array<array-key, int> $prerequisite */
        foreach ($prerequisites as $prerequisite) {
            $graph[$prerequisite[1]][] = $prerequisite[0];
            $inDegree[$prerequisite[0]]++;
        }

        for ($i = 0; $i < $numCourses; $i++) {
            if ($inDegree[$i] === 0) {
                $queue->enqueue($i);
            }
        }

        while (!$queue->isEmpty()) {
            /** @var int $course */
            $course = $queue->dequeue();
            $result[] = $course;

            if (isset($graph[$course])) {
                foreach ($graph[$course] as $neighbor) {
                    $inDegree[$neighbor]--;

                    if ($inDegree[$neighbor] === 0) {
                        $queue->enqueue($neighbor);
                    }
                }
            }
        }

        return count($result) === $numCourses ? $result : [];
    }
}
