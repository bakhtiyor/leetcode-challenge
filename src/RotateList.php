<?php

namespace App;

use App\library\ListNode;

/**
 * Rotate List
 *
 * Given the head of a linked list, rotate the list to the right by k places.
 *
 * Example 1:
 * Input: head = [1,2,3,4,5], k = 2
 * Output: [4,5,1,2,3]
 *
 * Example 2:
 * Input: head = [0,1,2], k = 4
 * Output: [2,0,1]
 *
 * https://leetcode.com/problems/rotate-list
 */
class RotateList
{
    /**
     * @param ListNode|null $head
     * @param int $k
     * @return ListNode|null
     */
    public function rotateRight(?ListNode $head, int $k): ?ListNode
    {
        // get length of the list node
        $tail = $head;
        $length = 1;
        while ($tail?->next) {
            $tail = $tail?->next;
            $length++;
        }

        $k %= $length;
        if ($k === 0) {
            return $head;
        }

        // move to the pivot and rotate
        $current = $head;
        for ($i = 1; $i < $length - $k; $i++) {
            $current = $current?->next;
        }
        $newHead = $current?->next;
        if ($current) {
            $current->next = null;
        }

        if ($tail) {
            $tail->next = $head;
        }

        return $newHead;
    }
}
