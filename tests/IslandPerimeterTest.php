<?php

namespace App\Tests;

use App\IslandPerimeter;
use PHPUnit\Framework\TestCase;

class IslandPerimeterTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testIslandPerimeter(array $grid, int $expected): void
    {
        $islandPerimeter = new IslandPerimeter();
        $result = $islandPerimeter->islandPerimeter($grid);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [[[0,1]], 4],
            [[[0,1,0,0],[1,1,1,0],[0,1,0,0],[1,1,0,0]], 16],
            [[[1]], 4],
            [[[1,0]], 4]
        ];
    }
}
