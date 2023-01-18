<?php

namespace App\library;

use Exception;

/**
 * LinkedList implementation
 */
class ListNode
{
    public ?ListNode $first = null;
    public ?ListNode $last = null;

    public int $val = 0;
    public ?ListNode $next = null;

    public function __construct(int $val = 0, ?ListNode $next = null)
    {
        $this->val = $val;
        $this->next = $next;
    }

    public function addLast(int $item): void
    {
        $node = new ListNode($item, null);
        if ($this->first === null) {
            $this->first = $this->last = $node;
        } else {
            if ($this->last) {
                $this->last->next = $node;
                $this->last = $node;
            }
        }
    }

    public function addFirst(int $item): void
    {
        $node = new ListNode($item, null);
        if ($this->first === null) {
            $this->first = $this->last = $node;
        } else {
            $node->next = $this->first;
            $this->first = $node;
        }
    }

    public function indexOf(int $item): int
    {
        $index = 0;
        $current = $this->first;
        while ($current) {
            if ($current->val === $item) {
                return $index;
            }
            $current = $current->next;
            $index++;
        }
        return -1;
    }

    public function contains(int $item): bool
    {
        return $this->indexOf($item) !== -1;
    }

    public function removeFirst(): void
    {
        if ($this->first === $this->last) {
            $this->first = $this->last = null;
            return;
        }
        if ($this->first) {
            $second = $this->first->next;
            $this->first->next = null;
            $this->first = $second;
        } else {
            throw new Exception('No element');
        }
    }

    public function removeLast(): void
    {
        if ($this->first === null) {
            throw new Exception('No element');
        }
        if ($this->first === $this->last) {
            $this->first = $this->last = null;
            return;
        }
        if ($this->last) {
            $previous = $this->getPrevious($this->last);
            $this->last = $previous;
            if ($this->last) {
                $this->last->next = null;
            }
        }
    }

    private function getPrevious(ListNode $node): ?ListNode
    {
        $current = $this->first;
        while ($current) {
            if ($current->next === $node) {
                return $current;
            }
            $current = $current->next;
        }
        return null;
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
