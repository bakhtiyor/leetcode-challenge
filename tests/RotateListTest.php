<?php

namespace App\Tests;

use App\library\ListNode;
use App\RotateList;
use PHPUnit\Framework\TestCase;

class RotateListTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     *
     * @param array<array-key, int> $listArr
     * @param int $k
     * @param array<array-key, int> $expectedArr
     * @return void
     */
    public function testMergeTwoLists(array $listArr, int $k, array $expectedArr): void
    {
        $list = null;
        for ($i = 0, $iMax = count($listArr); $i < $iMax; $i++) {
            ListNode::insertToList($list, new ListNode($listArr[$i], null));
        }

        $rotateList = new RotateList();
        $resultNode = $rotateList->rotateRight($list, $k);
        $resultArr = ListNode::listToArray($resultNode);

        $this->assertSame($expectedArr, $resultArr);
    }

    public function dataProvider(): array
    {
        return [
            [[1,2,3,4,5], 2, [4,5,1,2,3]],
            [[0,1,2], 4, [2,0,1]]
        ];
    }
}
