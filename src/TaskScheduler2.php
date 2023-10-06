<?php

namespace App;

/**
 * Task Scheduler II
 *
 * You are given a 0-indexed array of positive integers tasks, representing tasks that need to be completed in order,
 * where tasks[i] represents the type of the i-th task. You are also given a positive integer space, which represents
 * the minimum number of days that must pass after the completion of a task before another task of the same type can be
 * performed. Each day, until all tasks have been completed, you must either:
 *  - Complete the next task from tasks, or
 *  - Take a break.
 * Return the minimum number of days needed to complete all tasks.
 *
 * Example 1:
 * Input: tasks = [1,2,1,2,3,1], space = 3
 * Output: 9
 * Explanation:
 * One way to complete all tasks in 9 days is as follows:
 * Day 1: Complete the 0th task.
 * Day 2: Complete the 1st task.
 * Day 3: Take a break.
 * Day 4: Take a break.
 * Day 5: Complete the 2nd task.
 * Day 6: Complete the 3rd task.
 * Day 7: Take a break.
 * Day 8: Complete the 4th task.
 * Day 9: Complete the 5th task.
 * It can be shown that the tasks cannot be completed in less than 9 days.
 *
 * Example 2:
 * Input: tasks = [5,8,8,5], space = 2
 * Output: 6
 * Explanation:
 * One way to complete all tasks in 6 days is as follows:
 * Day 1: Complete the 0th task.
 * Day 2: Complete the 1st task.
 * Day 3: Take a break.
 * Day 4: Take a break.
 * Day 5: Complete the 2nd task.
 * Day 6: Complete the 3rd task.
 * It can be shown that the tasks cannot be completed in less than 6 days.
 *
 * https://leetcode.com/problems/task-scheduler-ii
 */
class TaskScheduler2
{
    /**
     * @param int[] $tasks
     * @param int $space
     * @return int
     */
    public function taskSchedulerII(array $tasks, int $space): int
    {
        $count_dict = [];
        $total_days = 0;

        foreach ($tasks as $task) {
            if (!isset($count_dict[$task])) {
                $count_dict[$task] = -INF;
            }
            $total_days = max($total_days + 1, $count_dict[$task] + $space + 1);
            $count_dict[$task] = $total_days;
        }

        return (int) $total_days;
    }
}
