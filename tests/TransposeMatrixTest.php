<?php

namespace App\Tests;

use App\TransposeMatrix;
use PHPUnit\Framework\TestCase;

class TransposeMatrixTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testTranspose(array $matrix, array $expected): void
    {
        $transposeMatrix = new TransposeMatrix();
        $this->assertEquals($expected, $transposeMatrix->transpose($matrix));
    }

    public function dataProvider(): array
    {
        return [
            [
                [[1,2,3],[4,5,6],[7,8,9]],
                [[1,4,7],[2,5,8],[3,6,9]]
            ],
            [
                [[1,2,3],[4,5,6]],
                [[1,4],[2,5],[3,6]]
            ]
        ];
    }
}
