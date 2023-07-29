<?php

namespace App\Tests;

use App\Shift2DGrid;
use PHPUnit\Framework\TestCase;

class Shift2DGridTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testShiftGrid(array $grid, int $k, array $expected): void
    {
        $sut = new Shift2DGrid();
        $this->assertEquals($expected, $sut->shiftGrid($grid, $k));
    }

    public function dataProvider(): array
    {
        return [
            [
                [[1, 2, 3], [4, 5, 6], [7, 8, 9]],
                1,
                [[9, 1, 2], [3, 4, 5], [6, 7, 8]],
            ],
            [
                [[3, 8, 1, 9], [19, 7, 2, 5], [4, 6, 11, 10], [12, 0, 21, 13]],
                4,
                [[12, 0, 21, 13], [3, 8, 1, 9], [19, 7, 2, 5], [4, 6, 11, 10]],
            ],
            [
                [[1, 2, 3], [4, 5, 6], [7, 8, 9]],
                9,
                [[1, 2, 3], [4, 5, 6], [7, 8, 9]],
            ],
        ];
    }
}
