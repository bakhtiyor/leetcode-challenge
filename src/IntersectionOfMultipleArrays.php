<?php

namespace App;

/**
 * Intersection of Multiple Arrays
 *
 * Given a 2D integer array nums where nums[i] is a non-empty array of distinct positive integers, return the list of
 * integers that are present in each array of nums sorted in ascending order.
 *
 * Example 1:
 * Input: nums = [[3,1,2,4,5],[1,2,3,4],[3,4,5,6]]
 * Output: [3,4]
 * Explanation:
 * The only integers present in each of nums[0] = [3,1,2,4,5], nums[1] = [1,2,3,4], and nums[2] = [3,4,5,6] are 3 and 4,
 * so we return [3,4].
 *
 * Example 2:
 * Input: nums = [[1,2,3],[4,5,6]]
 * Output: []
 * Explanation:
 * There does not exist any integer present both in nums[0] and nums[1], so we return an empty list [].
 *
 * https://leetcode.com/problems/intersection-of-multiple-arrays
 */
class IntersectionOfMultipleArrays
{
    /**
     * @psalm-suppress MixedReturnTypeCoercion, MixedArrayAssignment, MixedArgument
     * @param int[][] $nums
     * @return array<array-key, int>
     */
    public function intersection(array $nums): array
    {
        $return = [];
        array_walk_recursive(
            $nums,
            static function (int $a) use (&$return) {
                $return[] = $a;
            }
        );
        $val_counts = array_count_values($return);
        $still_standing  = array_keys($val_counts, count($nums));
        asort($still_standing);
        return $still_standing;
    }
}
