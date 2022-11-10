<?php

namespace App\Tests;

use App\library\ListNode;
use App\LinkedListMiddle;
use App\RemoveNodeFromList;
use PHPUnit\Framework\TestCase;

class RemoveNodeFromListTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     *
     * @param array<array-key, int> $nums
     * @param int $n
     * @param array<array-key, int> $expected
     * @return void
     */
    public function testRemoveNthFromEnd(array $nums, int $n, array $expected): void
    {
        $head = null;
        for ($i = 0, $iMax = count($nums); $i < $iMax; $i++) {
            ListNode::insertToList($head, new ListNode($nums[$i], null));
        }
        if ($head) {
            $removeNodeFromList = new RemoveNodeFromList();
            $result = $removeNodeFromList->removeNthFromEnd($head, $n);
            $resultArray = ListNode::listToArray($result);

            $this->assertSame($expected, $resultArray);
        }
    }

    public function dataProvider(): array
    {
        return [
            [[1,2], 2, [2]],
            [[1,2], 1, [1]],
            [[1], 1, []],
            [[1,2,3,4,5], 2, [1,2,3,5]],
        ];
    }
}
