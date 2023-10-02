<?php

namespace App\Tests;

use App\SetMatrixZeroes;
use PHPUnit\Framework\TestCase;

class SetMatrixZeroesTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testSetZeroes(array &$matrix, array $expected): void
    {
        $setMatrixZeroes = new SetMatrixZeroes();
        $setMatrixZeroes->setZeroes($matrix);

        $this->assertEquals($expected, $matrix);
    }

    public function dataProvider(): array
    {
        return [
            [
                'matrix' => [[1, 1, 1], [1, 0, 1], [1, 1, 1]],
                'expected' => [[1, 0, 1], [0, 0, 0], [1, 0, 1]],
            ],
            [
                'matrix' => [[0, 1, 2, 0], [3, 4, 5, 2], [1, 3, 1, 5]],
                'expected' => [[0, 0, 0, 0], [0, 4, 5, 0], [0, 3, 1, 0]],
            ],
        ];
    }
}
