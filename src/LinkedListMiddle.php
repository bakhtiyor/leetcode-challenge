<?php

namespace App;

use App\library\ListNode;

/**
 * Middle of the Linked List
 * Given the head of a singly linked list, return the middle node of the linked list.
 * If there are two middle nodes, return the second middle node.
 * Example 1:
 * Input: head = [1,2,3,4,5]
 * Output: [3,4,5]
 * Explanation: The middle node of the list is node 3.
 *
 * Example 2:
 * Input: head = [1,2,3,4,5,6]
 * Output: [4,5,6]
 * Explanation: Since the list has two middle nodes with values 3 and 4, we return the second one.
 *
 * https://leetcode.com/problems/middle-of-the-linked-list
 */
class LinkedListMiddle
{
    /**
     * @param ListNode $head
     * @return ListNode
     */
    public function middleNode(ListNode $head): ListNode
    {
        $arr = [];
        $index = 0;
        while ($head) {
            $arr[$index] = $head;
            $head = $head->next;
            $index++;
        }
        return $arr[$index / 2];
    }
}
