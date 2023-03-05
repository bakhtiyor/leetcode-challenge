<?php

namespace App\Tests;

use App\FindFirstAndLastPositionOfElementInSortedArray;
use PHPUnit\Framework\TestCase;

class FindFirstAndLastPositionOfElementInSortedArrayTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testSearchRange(array $expected, array $nums, int $target): void
    {
        $findFirstAndLastPositionOfElementInSortedArray = new FindFirstAndLastPositionOfElementInSortedArray();
        $result = $findFirstAndLastPositionOfElementInSortedArray->searchRange($nums, $target);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [[0,0], [1,3], 1],
            [[0,0], [1], 1],
            [[0,1], [2,2], 2],
            [[3,4], [5,7,7,8,8,10], 8],
            [[-1,-1], [5,7,7,8,8,10], 6],
            [[-1,-1], [], 0],
        ];
    }
}
