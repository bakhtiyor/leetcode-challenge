<?php

namespace App\Tests;

use App\CountIntegersWithEvenDigitSum;
use PHPUnit\Framework\TestCase;

class CountIntegersWithEvenDigitSumTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testCountEven(int $num, int $expected): void
    {
        $this->assertEquals($expected, (new CountIntegersWithEvenDigitSum())->countEven($num));
    }

    public function dataProvider(): array
    {
        return [
            [4, 2],
            [30, 14],
        ];
    }
}
