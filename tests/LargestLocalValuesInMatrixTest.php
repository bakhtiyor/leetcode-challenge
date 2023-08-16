<?php

namespace App\Tests;

use App\LargestLocalValuesInMatrix;
use PHPUnit\Framework\TestCase;

class LargestLocalValuesInMatrixTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testLargestLocal(array $grid, array $expected): void
    {
        $largestLocalValuesInMatrix = new LargestLocalValuesInMatrix();
        $this->assertEquals($expected, $largestLocalValuesInMatrix->largestLocal($grid));
    }

    public function dataProvider(): array
    {
        return [
            [[[9,9,8,1],[5,6,2,6],[8,2,6,4],[6,2,2,2]], [[9,9],[8,6]]],
            [[[1,1,1,1,1],[1,1,1,1,1],[1,1,2,1,1],[1,1,1,1,1],[1,1,1,1,1]], [[2,2,2],[2,2,2],[2,2,2]]],
        ];
    }
}
