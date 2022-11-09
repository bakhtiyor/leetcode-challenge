<?php

namespace App\library;

/**
 * LinkedList implementation
 */
class ListNode
{
    public int $val = 0;
    public ?ListNode $next = null;

    public function __construct(int $val = 0, ?ListNode $next = null)
    {
        $this->val = $val;
        $this->next = $next;
    }

    public static function listToArray(ListNode $head): array
    {
        $temp = $head;
        $arr = [];
        while ($temp) {
            $arr[] = $temp->val;
            $temp = $temp->next;
        }
        return $arr;
    }

    public static function insertToList(?ListNode &$head, ListNode $newItem): void
    {
        $newListNode = new ListNode($newItem->val, null);

        if ($head === null) {
            $head = $newListNode;
        } else {
            $temp = $head;
            while ($temp->next !== null) {
                $temp = $temp->next;
            }
            $temp->next = $newItem;
        }
    }
}
