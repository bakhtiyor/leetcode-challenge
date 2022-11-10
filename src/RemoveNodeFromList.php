<?php

namespace App;

use App\library\ListNode;

/**
 * Remove Nth Node From End of List
 *
 * Given the head of a linked list, remove the n-th node from the end of the list and return its head.
 * Example 1
 * Input: head = [1,2,3,4,5], n = 2     Output: [1,2,3,5]
 * Example 2:
 * Input: head = [1], n = 1     Output: []
 * Example 3:
 * Input: head = [1,2], n = 1   Output: [1]
 *
 * https://leetcode.com/problems/remove-nth-node-from-end-of-list
 */
class RemoveNodeFromList
{
    /**
     * @param ListNode $head
     * @param int $n
     * @return ListNode
     */
    public function removeNthFromEnd(ListNode $head, int $n): ?ListNode
    {
        ListNode::removeItemAtEnd($head, $n);
        return $head;
    }
}
