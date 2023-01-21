<?php

namespace App\Tests;

use App\library\ListNode;
use App\RemoveDuplicatesFromSortedList;
use PHPUnit\Framework\TestCase;

class RemoveDuplicatesFromSortedListTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     * @param array<array-key, int> $listArr
     * @param array<array-key, int> $expectedArr
     */
    public function testDeleteDuplicates(array $listArr, array $expectedArr): void
    {
        $list = null;
        for ($i = 0, $iMax = count($listArr); $i < $iMax; $i++) {
            ListNode::insertToList($list, new ListNode($listArr[$i], null));
        }

        $removeDuplicatesFromSortedList = new RemoveDuplicatesFromSortedList();
        if ($list) {
            $resultNode = $removeDuplicatesFromSortedList->deleteDuplicates($list);
            $resultArr = ListNode::listToArray($resultNode);
            $this->assertSame($expectedArr, $resultArr);
        }
    }

    public function dataProvider(): array
    {
        return [
            [[1,1,2,3,3], [1,2,3]],
            [[1,1,2], [1,2]]
        ];
    }
}
