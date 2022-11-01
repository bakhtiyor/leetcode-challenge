<?php

namespace App\Tests;

use App\DailyTemperatures;
use PHPUnit\Framework\TestCase;

class DailyTemperaturesTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testDailyTemperatures(array $temperatures, array $expected): void
    {
        $dailyTemperatures = new DailyTemperatures();
        $result = $dailyTemperatures->dailyTemperatures($temperatures);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [
                [73,74,75,71,69,72,76,73],
                [1,1,4,2,1,1,0,0]
            ],
            [
                [30,40,50,60],
                [1,1,1,0]
            ],
            [
                [30,60,90],
                [1,1,0]
            ]
        ];
    }
}
