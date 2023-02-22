<?php

namespace App\Tests;

use App\ReshapeMatrix;
use PHPUnit\Framework\TestCase;

class ReshapeMatrixTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testMatrixReshape(array $expected, array $matrix, int $row, int $col): void
    {
        $reshapeMatrix = new ReshapeMatrix();
        $result = $reshapeMatrix->matrixReshape($matrix, $row, $col);

        $this->assertSame($expected, $reshapeMatrix);
    }

    public function dataProvider(): array
    {
        return [
            [
                [[1,2,3,4]], [[1,2],[3,4]], 1, 4
            ],
            [
                [[1,2],[3,4]], [[1,2],[3,4]], 2, 4
            ]
        ];
    }
}
