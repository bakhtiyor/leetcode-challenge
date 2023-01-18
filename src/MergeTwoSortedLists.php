<?php

namespace App;

use App\library\ListNode;

/**
 * Merge Two Sorted Lists
 *
 * You are given the heads of two sorted linked lists list1 and list2. Merge the two lists in a one sorted list. The
 * list should be made by splicing together the nodes of the first two lists. Return the head of the merged linked list.
 *
 * Example 1:
 * Input: list1 = [1,2,4], list2 = [1,3,4]
 * Output: [1,1,2,3,4,4]
 *
 * Example 2:
 * Input: list1 = [], list2 = []
 * Output: []
 *
 * Example 3:
 * Input: list1 = [], list2 = [0]
 * Output: [0]
 *
 * https://leetcode.com/problems/merge-two-sorted-lists
 */
class MergeTwoSortedLists
{
    /**
     * @param ?ListNode $list1
     * @param ?ListNode $list2
     * @return ?ListNode
     */
    public function mergeTwoLists(?ListNode $list1, ?ListNode $list2): ?ListNode
    {
        $dummyNode = new ListNode();
        $tail = $dummyNode;
        while ($list1 && $list2) {
            if ($list1->val < $list2->val) {
                $tail->next = $list1;
                $list1 = $list1->next;
            } else {
                $tail->next = $list2;
                $list2 = $list2->next;
            }
            $tail = $tail->next;
        }
        if ($list1) {
            $tail->next = $list1;
        } elseif ($list2) {
            $tail->next = $list2;
        }
        return $dummyNode->next;
    }
}
