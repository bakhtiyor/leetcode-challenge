<?php

namespace App\Tests;

use App\library\ListNode;
use App\LinkedListMiddle;
use PHPUnit\Framework\TestCase;

class LinkedListMiddleTest extends TestCase
{
    /** @dataProvider dataProvider */
    /**
     * @param array<array-key, int> $nums
     * @param array<array-key, int> $expected
     * @return void
     */
    public function testMiddleNode(array $nums, array $expected): void
    {
        $head = null;
        for ($i = 0, $iMax = count($nums); $i < $iMax; $i++) {
            $this->insertToList($head, new ListNode($nums[$i], null));
        }
        if ($head) {
            $linkedListMiddle = new LinkedListMiddle();
            $middle = $linkedListMiddle->middleNode($head);
            $result = $this->listToArray($middle);

            $this->assertSame($expected, $result);
        }
    }

    private function listToArray(ListNode $head): array
    {
        $temp = $head;
        $arr = [];
        while ($temp) {
            $arr[] = $temp->val;
            $temp = $temp->next;
        }
        return $arr;
    }

    private function insertToList(?ListNode &$head, ListNode $newItem): void
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

    public function dataProvider(): array
    {
        return [
            [[1,2,3,4,5], [3,4,5]],
            [[1,2,3,4,5,6], [4,5,6]]
        ];
    }

}
