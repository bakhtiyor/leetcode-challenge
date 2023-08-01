<?php

namespace App\Tests;

use App\FindWidthOfColumnsOfGrid;
use PHPUnit\Framework\TestCase;

class FindWidthOfColumnsOfGridTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testFindColumnWidth(array $grid, array $expected): void
    {
        $obj = new FindWidthOfColumnsOfGrid();
        $this->assertEquals($expected, $obj->findColumnWidth($grid));
    }

    public function dataProvider(): array
    {
        return [
            [[[1],[22],[333]], [3]],
            [[[-15,1,3],[15,7,12],[5,6,-2]], [3,1,2]],
        ];
    }
}
