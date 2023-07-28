<?php

namespace App\Tests;

use App\MatrixCellsInDistanceOrder;
use PHPUnit\Framework\TestCase;

class MatrixCellsInDistanceOrderTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testAllCellsDistOrder(int $rows, int $cols, int $rCenter, int $cCenter, array $expected): void
    {
        $matrixCellsInDistanceOrder = new MatrixCellsInDistanceOrder();
        $this->assertEquals($expected, $matrixCellsInDistanceOrder->allCellsDistOrder($rows, $cols, $rCenter, $cCenter));
    }

    public function dataProvider(): array
    {
        return [
            [
                'rows' => 1,
                'cols' => 2,
                'rCenter' => 0,
                'cCenter' => 0,
                'expected' => [[0,0],[0,1]]
            ],
            [
                'rows' => 2,
                'cols' => 2,
                'rCenter' => 0,
                'cCenter' => 1,
                'expected' => [[0,1],[0,0],[1,1],[1,0]]
            ],
            [
                'rows' => 2,
                'cols' => 3,
                'rCenter' => 1,
                'cCenter' => 2,
                'expected' => [[1,2],[0,2],[1,1],[0,1],[1,0],[0,0]]
            ],
        ];
    }
}
