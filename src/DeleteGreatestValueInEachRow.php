<?php

namespace App;

/**
 * Delete Greatest Value in Each Row
 *
 * You are given an m x n matrix grid consisting of positive integers. Perform the following operation until grid
 * becomes empty:
 * - Delete the element with the greatest value from each row. If multiple such elements exist, delete any of them.
 * - Add the maximum of deleted elements to the answer.
 * Note that the number of columns decreases by one after each operation.
 * Return the answer after performing the operations described above.
 *
 * Example 1:
 * Input: grid = [[1,2,4],[3,3,1]]
 * Output: 8
 * Explanation: The diagram above shows the removed values in each step.
 * - In the first operation, we remove 4 from the first row and 3 from the second row (notice that, there are two cells with value 3 and we can remove any of them). We add 4 to the answer.
 * - In the second operation, we remove 2 from the first row and 3 from the second row. We add 3 to the answer.
 * - In the third operation, we remove 1 from the first row and 1 from the second row. We add 1 to the answer.
 * The final answer = 4 + 3 + 1 = 8.
 *
 * Example 2:
 * Input: grid = [[10]]
 * Output: 10
 * Explanation: The diagram above shows the removed values in each step.
 * - In the first operation, we remove 10 from the first row. We add 10 to the answer.
 * The final answer = 10.
 *
 * https://leetcode.com/problems/delete-greatest-value-in-each-row
 */
class DeleteGreatestValueInEachRow
{
    /**
     * @param array<array-key, int> $grid
     * @return int
     */
    public function deleteGreatestValue(array $grid): int
    {
        $numRows = count($grid);
        $maxItems = [];
        $maxDeleted = PHP_INT_MIN;
        for ($row = 0; $row < $numRows; $row++) {
            $numCols = count($grid[$row]);
            $max = $grid[$row][0];
            $maxIndex = 0;
            for ($col = 1; $col < $numCols; $col++) {
                if ($max < $grid[$row][$col]) {
                    $max = $grid[$row][$col];
                    $maxIndex = $col;
                }
            }
            if ($max > $maxDeleted) {
                $maxDeleted = $max;
            }
            unset($grid[$row][$maxIndex]);
            $grid[$row] = array_values($grid[$row]); // reorder indexes of the current row after deleting its element

            if ($row + 1 >= $numRows && count($grid[0]) > 0) {
                $row = -1;
                $numRows = count($grid);
                $maxItems[] = $maxDeleted;
                $maxDeleted = PHP_INT_MIN;
            }
        }
        $maxItems[] = $maxDeleted;
        return array_sum($maxItems);
    }
}