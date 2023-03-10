<?php

namespace App\Tests;

use App\CountNegativeNumbersInSortedMatrix;
use PHPUnit\Framework\TestCase;

class CountNegativeNumbersInSortedMatrixTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testCountNegatives(array $grid, int $expected): void
    {
        $countNegativeNumbersInSortedMatrix = new CountNegativeNumbersInSortedMatrix();
        $result = $countNegativeNumbersInSortedMatrix->countNegatives($grid);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [[[3,2],[-3,-3],[-3,-3],[-3,-3]], 6],
            [[[7,-3]], 1],
            [[[4,3,2,-1],[3,2,1,-1],[1,1,-1,-2],[-1,-1,-2,-3]], 8],
            [[[3,2],[1,0]],0],
        ];
    }
}
