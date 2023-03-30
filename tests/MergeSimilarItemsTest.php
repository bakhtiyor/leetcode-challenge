<?php

namespace App\Tests;

use App\MergeSimilarItems;
use PHPUnit\Framework\TestCase;

class MergeSimilarItemsTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testMergeSimilarItems(array $items1, array $items2, array $expected): void
    {
        $mergeSimilarItems = new MergeSimilarItems();
        $this->assertEquals($expected, $mergeSimilarItems->mergeSimilarItems($items1, $items2));
    }

    public function dataProvider(): array
    {
        return [
            [
                [[5,1],[4,2],[3,3],[2,4],[1,5]],
                [[7,1],[6,2],[5,3],[4,4]],
                [[1,5],[2,4],[3,3],[4,6],[5,4],[6,2],[7,1]]
            ],
            [
                [[1,3],[2,2]],
                [[7,1],[2,2],[1,4]],
                [[1,7],[2,4],[7,1]]
            ],
            [
                [[1,1],[4,5],[3,8]],
                [[3,1],[1,5]],
                [[1,6],[3,9],[4,5]],
            ],
            [
                [[1,1],[3,2],[2,3]],
                [[2,1],[3,2],[1,3]],
                [[1,4],[2,4],[3,4]],
            ],
        ];
    }
}
