<?php

namespace App;

/**
 * Determine if Two Events Have Conflict
 *
 * You are given two arrays of strings that represent two inclusive events that happened on the same day,
 * event1 and event2, where:
 * event1 = [startTime1, endTime1] and
 * event2 = [startTime2, endTime2].
 * Event times are valid 24 hours format in the form of HH:MM.
 * A conflict happens when two events have some non-empty intersection (i.e., some moment is common to both events).
 * Return true if there is a conflict between two events. Otherwise, return false.
 *
 * Example 1:
 * Input: event1 = ["01:15","02:00"], event2 = ["02:00","03:00"]
 * Output: true
 * Explanation: The two events intersect at time 2:00.
 * Example 3:
 * Input: event1 = ["10:00","11:00"], event2 = ["14:00","15:00"]
 * Output: false
 * Explanation: The two events do not intersect.
 *
 * https://leetcode.com/contest/weekly-contest-316/problems/determine-if-two-events-have-conflict
 */
class TwoEventsHaveConflict
{
    /**
     * @param array<array-key, string> $event1
     * @param array<array-key, string> $event2
     * @return bool
     */
    public function haveConflict(array $event1, array $event2): bool
    {
        $event1StartTime = $event1[0];
        $event1EndTime = $event1[1];
        $event2StartTime = $event2[0];
        $event2EndTime = $event2[1];
        return ($event2StartTime <= $event1EndTime && $event2EndTime >= $event1StartTime);
    }
}
