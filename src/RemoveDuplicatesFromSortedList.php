<?php

namespace App;

use App\library\ListNode;

/**
 * Remove Duplicates from Sorted List
 *
 * Given the head of a sorted linked list, delete all duplicates such that each element appears only once. Return the
 * linked list sorted as well.
 *
 * Example 1:
 * Input: head = [1,1,2]
 * Output: [1,2]
 *
 * Example 2:
 * Input: head = [1,1,2,3,3]
 * Output: [1,2,3]
 *
 * https://leetcode.com/problems/remove-duplicates-from-sorted-list
 */
class RemoveDuplicatesFromSortedList
{
    /**
     * @param ListNode|null $head
     * @return ListNode|null
     */
    public function deleteDuplicates(?ListNode $head): ?ListNode
    {
        $previous = $head;
        $current = $head?->next;
        while ($current) {
            if ($previous?->val === $current->val) {
                if ($previous) {
                    $previous->next = $current->next;
                }
            } else {
                $previous = $current;
            }
            $current = $current->next;
        }
        return $head;
    }
}
