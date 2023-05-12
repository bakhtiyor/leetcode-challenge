<?php

namespace App\Tests;

use App\MaximumPopulationYear;
use PHPUnit\Framework\TestCase;

class MaximumPopulationYearTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testMaximumPopulation(array $logs, int $expected): void
    {
        $this->assertEquals($expected, (new MaximumPopulationYear())->maximumPopulation($logs));
    }

    public function dataProvider(): array
    {
        return [
            [
                [
                    [1993, 1999],
                    [2000, 2010]
                ],
                1993
            ],
            [
                [
                    [1950, 1961],
                    [1960, 1971],
                    [1970, 1981]
                ],
                1960
            ]
        ];
    }
}
