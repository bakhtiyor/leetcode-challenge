<?php

namespace App\Tests;

use App\NumberOfSeniorCitizens;
use PHPUnit\Framework\TestCase;

class NumberOfSeniorCitizensTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testCountSeniors(array $details, int $expected): void
    {
        $this->assertEquals($expected, (new NumberOfSeniorCitizens())->countSeniors($details));
    }

    public function dataProvider(): array
    {
        return [
            [
                ['7868190130M7522', '5303914400F9211', '9273338290F4010'],
                2
            ],
            [
                ['1313579440F2036', '2921522980M5644'],
                0
            ]
        ];
    }
}
