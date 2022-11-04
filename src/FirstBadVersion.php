<?php

namespace App;

use App\library\VersionControl;

/**
 * First Bad Version
 *
 * You are a product manager and currently leading a team to develop a new product. Unfortunately, the latest version
 * of your product fails the quality check. Since each version is developed based on the previous version, all the
 * versions after a bad version are also bad.
 * Suppose you have n versions [1, 2, ..., n] and you want to find out the first bad one, which causes all the following
 * ones to be bad.
 * You are given an API bool isBadVersion(version) which returns whether version is bad. Implement a function to find
 * the first bad version. You should minimize the number of calls to the API.
 *
 * Example 1:
 * Input: n = 5, bad = 4
 * Output: 4
 * Explanation: call isBadVersion(3) -> false call isBadVersion(5) -> true call isBadVersion(4) -> true
 * Then 4 is the first bad version.
 *
 * Example 2:
 * Input: n = 1, bad = 1 Output: 1
 *
 * https://leetcode.com/problems/first-bad-version
 */
class FirstBadVersion extends VersionControl
{
    /**
     * @param int $n
     * @return int
     */
    public function firstBadVersion(int $n): int
    {
        return $this->binarySearch(0, $n, -1);
    }

    public function binarySearch(int $low, int $high, int $lastGoogVersion): int
    {
        if ($low > $high) {
            return (int) ceil(($low + $high) / 2);
        }
        $middle = (int) round(($low + $high) / 2, 2);
        if ($this->isBadVersion($middle)) {
            if ($lastGoogVersion - $middle === 1) {
                return $middle;
            } else {
                return $this->binarySearch($low, $middle - 1, $lastGoogVersion);
            }
        } else {
            return $this->binarySearch($middle + 1, $high, $middle);
        }
    }
}
