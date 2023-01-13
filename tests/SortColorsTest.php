<?php

namespace App\Tests;

use App\SortColors;
use PHPUnit\Framework\TestCase;

class SortColorsTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testSortColors(array $nums, array $expected): void
    {
        $sortColors = new SortColors();
        $sortColors->sortColors($nums);

        $this->assertSame($expected, $nums);
    }

    public function dataProvider(): array
    {
        return [
            [[2,0,2,1,1,0], [0,0,1,1,2,2]],
            [[2,0,1], [0,1,2]]
        ];
    }
}
