<?php

namespace App\Tests;

use App\ToeplitzMatrix;
use PHPUnit\Framework\TestCase;

class ToeplitzMatrixTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testIsToeplitzMatrix(array $matrix, bool $expected): void
    {
        $toeplitzMatrix = new ToeplitzMatrix();
        $result = $toeplitzMatrix->isToeplitzMatrix($matrix);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [
                [[36,59,71,15,26,82,87],[56,36,59,71,15,26,82],[15,0,36,59,71,15,26]], false
            ],
            [
                [[1,2,3,4],[5,1,2,3],[9,5,1,2]], true
            ],
            [
                [[1,2],[2,2]], false
            ]
        ];
    }
}
