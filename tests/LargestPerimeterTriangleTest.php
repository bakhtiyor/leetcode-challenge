<?php

namespace App\Tests;

use App\LargestPerimeterTriangle;
use PHPUnit\Framework\TestCase;

class LargestPerimeterTriangleTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testLargestPerimeter(array $nums, int $expected): void
    {
        $this->assertEquals($expected, (new LargestPerimeterTriangle())->largestPerimeter($nums));
    }

    public function dataProvider(): array
    {
        return [
            [[2, 1, 2], 5],
            [[1, 2, 1, 10], 0],
        ];
    }
}
