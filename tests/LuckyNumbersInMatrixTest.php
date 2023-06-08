<?php

namespace App\Tests;

use App\LuckyNumbersInMatrix;
use PHPUnit\Framework\TestCase;

class LuckyNumbersInMatrixTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testLuckyNumbers(array $matrix, array $expected): void
    {
        $sut = new LuckyNumbersInMatrix();
        $this->assertEquals($expected, $sut->luckyNumbers($matrix));
    }

    public function dataProvider(): array
    {
        return [
            [
                'matrix' => [[3,7,8],[9,11,13],[15,16,17]],
                'expected' => [15],
            ],
            [
                'matrix' => [[1,10,4,2],[9,3,8,7],[15,16,17,12]],
                'expected' => [12],
            ],
            [
                'matrix' => [[7,8],[1,2]],
                'expected' => [7],
            ],
        ];
    }
}
