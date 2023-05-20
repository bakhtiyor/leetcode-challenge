<?php

namespace App\Tests;

use App\SumMultiples;
use PHPUnit\Framework\TestCase;

class SumMultiplesTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testSumOfMultiples(int $n, int $expected): void
    {
        $sut = new SumMultiples();
        $this->assertEquals($expected, $sut->sumOfMultiples($n));
    }

    public function dataProvider(): array
    {
        return [
            [7, 21],
            [10, 40],
            [9, 30],
        ];
    }
}
