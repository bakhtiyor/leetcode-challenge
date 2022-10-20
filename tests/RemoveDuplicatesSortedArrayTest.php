<?php

namespace App\Tests;

use App\RemoveDuplicatesSortedArray;
use PHPUnit\Framework\TestCase;

class RemoveDuplicatesSortedArrayTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testRemoveDuplicates(array $nums, int $expected)
    {
        $removeDuplicatesSortedArray = new RemoveDuplicatesSortedArray();
        $result = $removeDuplicatesSortedArray->removeDuplicates($nums);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [[1,1,2], 2],
            [[0,0,1,1,1,2,2,3,3,4], 5]
        ];
    }
}
