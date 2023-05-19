<?php

namespace App\Tests;

use App\FindMiddleIndexInArray;
use PHPUnit\Framework\TestCase;

class FindMiddleIndexInArrayTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testFindMiddleIndex(array $nums, int $expected): void
    {
        $sut = new FindMiddleIndexInArray();
        $this->assertEquals($expected, $sut->findMiddleIndex($nums));
    }

    public function dataProvider(): array
    {
        return [
            [[2, 3, -1, 8, 4], 3],
            [[1, -1, 4], 2],
            [[2, 5], -1],
        ];
    }
}
