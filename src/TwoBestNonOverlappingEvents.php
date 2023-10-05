<?php

namespace App;

/**
 * Two Best Non-Overlapping Events
 *
 * You are given a 0-indexed 2D integer array of events where events[i] = [startTime_i, endTime_i, value_i]. The i-th
 * event starts at startTime_i and ends at endTime_i, and if you attend this event, you will receive a value of value_i.
 * You can choose at most two non-overlapping events to attend such that the sum of their values is maximized.
 * Return this maximum sum.
 * Note that the start time and end time is inclusive: that is, you cannot attend two events where one of them starts
 * and the other ends at the same time. More specifically, if you attend an event with end time t, the next event must
 * start at or after t + 1.
 *
 * Example 1:
 * Input: events = [[1,3,2],[4,5,2],[2,4,3]]
 * Output: 4
 * Explanation: Choose the green events, 0 and 1 for a sum of 2 + 2 = 4.
 *
 * Example 2:
 * Example 1 Diagram
 * Input: events = [[1,3,2],[4,5,2],[1,5,5]]
 * Output: 5
 * Explanation: Choose event 2 for a sum of 5.
 *
 * Example 3:
 * Input: events = [[1,5,3],[1,5,1],[6,6,5]]
 * Output: 8
 * Explanation: Choose events 0 and 2 for a sum of 3 + 5 = 8.
 *
 * https://leetcode.com/problems/two-best-non-overlapping-events
 */
class TwoBestNonOverlappingEvents
{
    /**
     * @param int[][] $events
     * @return int
     *
     */
    public function maxTwoEvents(array $events): int
    {
        $maxSum = 0;
        $n = count($events);

        // For Binary Search, we need Sorting first
        // If we apply sort method to events, it will sort the events based on start time
        usort($events, static function (array $a, array $b): mixed {
            return (int) $a[0] - (int) $b[0];
        });

        // Precompute the maximum value on the right for each event
        $maxOnRight = array_fill(0, $n, 0);

        // For the last event, there is no event on its right
        // So for it, the maximum is its value only
        $maxOnRight[$n - 1] = $events[$n - 1][2];

        for ($i = $n - 2; $i >= 0; $i--) {
            $maxOnRight[$i] = max($events[$i][2], $maxOnRight[$i + 1]);
        }

        // For each event
        for ($i = 0; $i < $n; $i++) {
            $sum = $events[$i][2];
            $maxVal = 0;

            // Now, we can use Binary Search to find the leftmost valid event for the ith event
            // Because if we can find such an index, then all events after that index are also valid
            // Because the array is sorted based on start time
            // so all events after that index will also have a start time greater than the end time of the ith event
            $start = $i + 1;
            $end = $n - 1;
            $leftmostValid = -1;

            while ($start <= $end) {
                $mid = $start + intdiv(($end - $start), 2);

                // If mid is a valid event that we can consider pairing
                // We can store this index as it may be the leftmost valid index
                // But we keep searching on the left of mid to find the leftmost if there is any other valid event on the left
                if ($events[$mid][0] > $events[$i][1]) {
                    $leftmostValid = $mid;
                    $end = $mid - 1;
                }
                // If mid itself is not valid, how can any event before mid can be valid?
                else {
                    $start = $mid + 1;
                }
            }

            // Now, all that we want is what is the maximum value in the [$leftmostValid, $n - 1] subarray
            // No need to find that again because we have precomputed that in the beginning
            if ($leftmostValid != -1) {
                $maxVal = $maxOnRight[$leftmostValid];
            }

            $maxSum = max($maxSum, $sum + $maxVal);
        }

        return $maxSum;
    }
}
