<?php

namespace App\Tests;

use App\NumberOfEvenAndOddBits;
use PHPUnit\Framework\TestCase;

class NumberOfEvenAndOddBitsTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testEvenOddBit(int $num, array $expected): void
    {
        $numberOfEvenAndOddBits = new NumberOfEvenAndOddBits();
        $this->assertEquals($expected, $numberOfEvenAndOddBits->evenOddBit($num));
    }

    public function dataProvider(): array
    {
        return [
            [2, [0, 1]],
            [17, [2, 0]],
        ];
    }
}
