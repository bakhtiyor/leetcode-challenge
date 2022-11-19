<?php

namespace App;

/**
 * Majority Element
 *
 * Given an array nums of size n, return the majority element.
 * The majority element is the element that appears more than ⌊n / 2⌋ times. You may assume that the majority element
 * always exists in the array.
 *
 * Example 1:
 * Input: nums = [3,2,3]            Output: 3
 *
 * Example 2:
 * Input: nums = [2,2,1,1,1,2,2]    Output: 2
 *
 * https://leetcode.com/problems/majority-element
 */
class MajorityElement
{
    /**
     * @param array<array-key, int> $nums
     * @return int
     */
    public function majorityElement(array $nums): int
    {
        /** @var array<int, int> $hashTable */
        $hashTable = [];
        foreach ($nums as $num) {
            if (isset($hashTable[$num])) {
                $hashTable[$num]++;
            } else {
                $hashTable[$num] = 1;
            }
        }
        $max = 0;
        $freqNum = 0;
        foreach ($hashTable as $key => $hashValue) {
            if ($hashValue > $max) {
                $max = $hashValue;
                $freqNum = $key;
            }
        }
        return $freqNum;
    }
}
