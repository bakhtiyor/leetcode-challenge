<?php

namespace App;

use App\library\ListNode;

/**
 * Remove Linked List Elements
 *
 * Given the head of a linked list and an integer val, remove all the nodes of the linked list that has Node.val == val,
 * and return the new head.
 *
 * Example 1:
 * Input: head = [1,2,6,3,4,5,6], val = 6
 * Output: [1,2,3,4,5]
 *
 * Example 2:
 * Input: head = [7,7,7,7], val = 7
 * Output: []
 *
 * https://leetcode.com/problems/remove-linked-list-elements
 */
class RemoveLinkedListElements
{
    /**
     * @param ListNode|null $head
     * @param int $val
     * @return ListNode|null
     */
    public function removeElements(?ListNode $head, int $val): ?ListNode
    {
        if (!$head) {
            return null;
        }
        $dummy = new ListNode();
        $dummy->next = $head;
        $current = $dummy;
        while ($current->next) {
            if ($current->next->val === $val) {
                $current->next = $current->next->next;
            } else {
                $current = $current->next;
            }
        }
        return $dummy->next;
    }
}
