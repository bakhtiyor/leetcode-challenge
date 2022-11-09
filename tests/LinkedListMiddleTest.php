<?php

namespace App\Tests;

use App\library\ListNode;
use App\LinkedListMiddle;
use PHPUnit\Framework\TestCase;

class LinkedListMiddleTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     *
     * @param array<array-key, int> $nums
     * @param array<array-key, int> $expected
     * @return void
     */
    public function testMiddleNode(array $nums, array $expected): void
    {
        $head = null;
        for ($i = 0, $iMax = count($nums); $i < $iMax; $i++) {
            ListNode::insertToList($head, new ListNode($nums[$i], null));
        }
        if ($head) {
            $linkedListMiddle = new LinkedListMiddle();
            $middle = $linkedListMiddle->middleNode($head);
            $result = ListNode::listToArray($middle);

            $this->assertSame($expected, $result);
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
