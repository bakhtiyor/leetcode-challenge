<?php

namespace App\Tests;

use App\FindPivotIndex;
use PHPUnit\Framework\TestCase;

class FindPivotIndexTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testPivotIndex(array $nums, int $expected): void
    {
        $this->assertSame($expected, (new FindPivotIndex())->pivotIndex($nums));
    }

    public function dataProvider(): array
    {
        return [
            [[1, 7, 3, 6, 5, 6], 3],
            [[1, 2, 3], -1],
            [[2, 1, -1], 0],
        ];
    }
}
