<?php

namespace App\Tests;

use App\library\ListNode;
use App\MergeTwoSortedLists;
use PHPUnit\Framework\TestCase;

class MergeTwoSortedListsTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     *
     * @param array<array-key, int> $list1
     * @param array<array-key, int> $list2
     * @param array<array-key, int> $expected
     * @return void
     */
    public function testMergeTwoLists(array $list1, array $list2, array $expected): void
    {
        $headList1 = null;
        for ($i = 0, $iMax = count($list1); $i < $iMax; $i++) {
            ListNode::insertToList($headList1, new ListNode($list1[$i], null));
        }
        $headList2 = null;
        for ($i = 0, $iMax = count($list2); $i < $iMax; $i++) {
            ListNode::insertToList($headList2, new ListNode($list2[$i], null));
        }

        $mergeTwoSortedLists = new MergeTwoSortedLists();
        $resultNode = $mergeTwoSortedLists->mergeTwoLists($headList1, $headList2);
        $result = ListNode::listToArray($resultNode);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [[1,2,4], [1,3,4], [1,1,2,3,4,4]],
            [[], [], []],
            [[], [0], [0]]
        ];
    }
}
