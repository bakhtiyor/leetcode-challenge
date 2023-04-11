<?php

namespace App\Tests;

use App\RectangleOverlap;
use PHPUnit\Framework\TestCase;

class RectangleOverlapTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testIsRectangleOverlap(array $rec1, array $rec2, bool $expected): void
    {
        $this->assertSame($expected, (new RectangleOverlap())->isRectangleOverlap($rec1, $rec2));
    }

    public function dataProvider(): array
    {
        return [
            [[0,0,2,2], [1,1,3,3], true],
            [[0,0,1,1], [1,0,2,1], false],
            [[0,0,1,1], [2,2,3,3], false],
        ];
    }
}
