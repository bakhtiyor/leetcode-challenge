<?php

namespace App\Tests;

use App\MatrixDiagonalSum;
use PHPUnit\Framework\TestCase;

class MatrixDiagonalSumTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testDiagonalSum(array $mat, int $expected): void
    {
        $matrixDiagonalSum = new MatrixDiagonalSum();
        $this->assertSame($expected, $matrixDiagonalSum->diagonalSum($mat));
    }

    public function dataProvider(): array
    {
        return [
            [
                [[1, 2, 3], [4, 5, 6], [7, 8, 9]],
                25,
            ],
            [
                [[1, 1, 1, 1], [1, 1, 1, 1], [1, 1, 1, 1], [1, 1, 1, 1]],
                8,
            ],
            [
                [[5]],
                5,
            ],
        ];
    }
}
