<?php

namespace App;

use App\library\ListNode;

/**
 * Linked List Cycle
 *
 * Given head, the head of a linked list, determine if the linked list has a cycle in it. There is a cycle in a linked
 * list if there is some node in the list that can be reached again by continuously following the next pointer.
 * Internally, pos is used to denote the index of the node that tail's next pointer is connected to. Note that pos is
 * not passed as a parameter. Return true if there is a cycle in the linked list. Otherwise, return false.
 *
 * Example 1
 * Input: head = [3,2,0,-4], pos = 1
 * Output: true
 * Explanation: There is a cycle in the linked list, where the tail connects to the 1st node (0-indexed).
 *
 * https://leetcode.com/problems/linked-list-cycle
 */
class LinkedListCycle
{
    /**
     * @param ListNode|null $head
     * @return bool
     */
    public function hasCycle(?ListNode $head): bool
    {
        if (!$head) {
            return false;
        }
        while ($head->next) {
            if ($head->val === PHP_INT_MIN) {
                return true;
            }
            $head->val = PHP_INT_MIN;
            $head = $head->next;
        }
        return false;
    }
}
