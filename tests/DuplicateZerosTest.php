<?php

namespace App\Tests;

use App\DuplicateZeros;
use PHPUnit\Framework\TestCase;

class DuplicateZerosTest extends TestCase
{
    /** @dataProvider duplicateZerosDataProvider */
    public function testDuplicateZeros(array $arr, array $expected): void
    {
        $duplicateZeros = new DuplicateZeros();
        $duplicateZeros->duplicateZeros($arr);

        $this->assertSame($arr, $expected);
    }

    public function duplicateZerosDataProvider(): array
    {
        return [
            [
                [1,0,2,3,0,4,5,0],
                [1,0,0,2,3,0,0,4]
            ],
            [
                [1,2,3],
                [1,2,3]
            ],
            [
                [0,0,0,0,0,0,0],
                [0,0,0,0,0,0,0]
            ]
        ];
    }
}
