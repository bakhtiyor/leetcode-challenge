<?php

namespace App\Tests;

use App\CountDigitsThatDivideNumber;
use PHPUnit\Framework\TestCase;

class CountDigitsThatDivideNumberTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testCountDigits(int $num, int $expected): void
    {
        $countDigitsThatDivideNumber = new CountDigitsThatDivideNumber();
        $this->assertEquals($expected, $countDigitsThatDivideNumber->countDigits($num));
    }

    public function dataProvider(): array
    {
        return [
            [7, 1],
            [121, 2],
            [1248, 4],
        ];
    }
}
