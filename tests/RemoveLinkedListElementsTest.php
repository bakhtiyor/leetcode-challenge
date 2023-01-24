<?php

namespace App\Tests;

use App\library\ListNode;
use App\RemoveLinkedListElements;
use PHPUnit\Framework\TestCase;

class RemoveLinkedListElementsTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     * @param array<array-key, int> $listArr
     * @param int $val
     * @param array<array-key, int> $expectedArr
     * @return void
     */
    public function testRemoveElements(array $listArr, int $val, array $expectedArr): void
    {
        $list = null;
        for ($i = 0, $iMax = count($listArr); $i < $iMax; $i++) {
            ListNode::insertToList($list, new ListNode($listArr[$i], null));
        }

        $removeLinkedListElements = new RemoveLinkedListElements();
        $resultNode = $removeLinkedListElements->removeElements($list, $val);
        $resultArr = ListNode::listToArray($resultNode);

        $this->assertSame($expectedArr, $resultArr);
    }

    public function dataProvider(): array
    {
        return [
            [[1,2,6,3,4,5,6], 6, [1,2,3,4,5]],
            [[7,7,7,7], 7, []]
        ];
    }
}
