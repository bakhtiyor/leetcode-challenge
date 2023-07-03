<?php

namespace App;

use InvalidArgumentException;

/**
 * Average Salary Excluding the Minimum and Maximum Salary
 *
 * You are given an array of unique integers salary where salary[i] is the salary of the ith employee. Return the
 * average salary of employees excluding the minimum and maximum salary. Answers within 10-5 of the actual answer will
 * be accepted.
 *
 * Example 1:
 * Input: salary = [4000,3000,1000,2000]
 * Output: 2500.00000
 * Explanation: Minimum salary and maximum salary are 1000 and 4000 respectively.
 * Average salary excluding minimum and maximum salary is (2000+3000) / 2 = 2500
 *
 * Example 2:
 * Input: salary = [1000,2000,3000]
 * Output: 2000.00000
 * Explanation: Minimum salary and maximum salary are 1000 and 3000 respectively.
 * Average salary excluding minimum and maximum salary is (2000) / 1 = 2000
 *
 * https://leetcode.com/problems/average-salary-excluding-the-minimum-and-maximum-salary
 */
class AverageSalaryExcludingMinimumAndMaximumSalary
{
    /**
     * @param int[] $salary
     * @return float
     */
    public function average(array $salary): float
    {
        if (empty($salary)) {
            throw new InvalidArgumentException('The salary array cannot be empty.');
        }
        $min = min($salary);
        $max = max($salary);
        $sum = 0;
        $count = 0;
        foreach ($salary as $value) {
            if ($value !== $min && $value !== $max) {
                $sum += $value;
                $count++;
            }
        }
        return $sum / $count;
    }
}
