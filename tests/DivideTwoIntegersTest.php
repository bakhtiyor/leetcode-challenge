<?php

namespace App\Tests;

use App\DivideTwoIntegers;
use PHPUnit\Framework\TestCase;

class DivideTwoIntegersTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testDivide(int $dividend, int $divisor, int $expected): void
    {
        $sut = new DivideTwoIntegers();
        $this->assertEquals($expected, $sut->divide($dividend, $divisor));
    }

    public function dataProvider(): array
    {
        return [
            [10, 3, 3],
            [7, -3, -2]
        ];
    }
}
