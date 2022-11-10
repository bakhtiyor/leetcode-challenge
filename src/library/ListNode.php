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

    public static function listToArray(?ListNode $head): array
    {
        $arr = [];
        while ($head) {
            $arr[] = $head->val;
            $head = $head->next;
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

    public static function removeItemAt(?ListNode &$head, int $position): void
    {
        $temp = $head;
        for ($i = 1; $i < $position - 1; $i++) {
            if ($temp && $head) {
                $temp = $head->next;
            }
        }

        if ($temp && $temp->next) {
            $nodeToDelete = $temp->next;
            $temp->next = $nodeToDelete->next;
        }
    }

    public static function removeItemAtEnd(?ListNode &$head, int $position): void
    {
        $nodeItems = 0;
        $temp = $head;
        while ($temp) {
            $temp = $temp->next;
            $nodeItems++;
        }
        if ($position === 1 && $head !== null && $nodeItems === 1) {
            $head = $head->next;
        } else {
            $temp = $head;
            if ($nodeItems - $position > 0) {
                for ($i = 1; $i < $nodeItems - $position; $i++) {
                    if ($temp) {
                        $temp = $temp->next;
                    }
                }
                if ($temp && $temp->next) {
                    $nodeToDelete = $temp->next;
                    $temp->next = $nodeToDelete->next;
                }
            } else {
                if ($temp) {
                    $nodeToDelete = $temp;
                    $head = $nodeToDelete->next;
                }
            }
        }
    }
}
