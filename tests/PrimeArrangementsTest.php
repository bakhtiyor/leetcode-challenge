<?php

namespace App\Tests;

use App\PrimeArrangements;
use PHPUnit\Framework\TestCase;

class PrimeArrangementsTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testNumPrimeArrangements(int $num, int $expected): void
    {
        $primeArrangements = new PrimeArrangements();
        $this->assertEquals($expected, $primeArrangements->numPrimeArrangements($num));
    }

    public function dataProvider(): array
    {
        return [
            [
                5,
                12
            ],
            [
                100,
                682289015
            ],
        ];
    }
}
