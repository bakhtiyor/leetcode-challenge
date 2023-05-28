<?php

namespace App\Tests;

use App\RowWithMaximumOnes;
use PHPUnit\Framework\TestCase;

class RowWithMaximumOnesTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testRowAndMaximumOnes(array $mat, array $expected): void
    {
        $sut = new RowWithMaximumOnes();
        $this->assertEquals($expected, $sut->rowAndMaximumOnes($mat));
    }

    public function dataProvider(): array
    {
        return [
            [
                'mat' => [[0, 1], [1, 0]],
                'expected' => [0, 1],
            ],
            [
                'mat' => [[0, 0, 0], [0, 1, 1]],
                'expected' => [1, 2],
            ],
            [
                'mat' => [[0, 0], [1, 1], [0, 0]],
                'expected' => [1, 2],
            ],
        ];
    }
}
