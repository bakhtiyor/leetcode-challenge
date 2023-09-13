<?php

namespace App\Tests;

use App\SurfaceAreaOf3DShapes;
use PHPUnit\Framework\TestCase;

class SurfaceAreaOf3DShapesTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testSurfaceArea(array $grid, int $expected): void
    {
        $sut = new SurfaceAreaOf3DShapes();
        $this->assertEquals($expected, $sut->surfaceArea($grid));
    }

    public function dataProvider(): array
    {
        return [
            [
                [[1, 2], [3, 4]],
                34,
            ],
            [
                [[1, 1, 1], [1, 0, 1], [1, 1, 1]],
                32,
            ],
            [
                [[2, 2, 2], [2, 1, 2], [2, 2, 2]],
                46,
            ],
        ];
    }
}
