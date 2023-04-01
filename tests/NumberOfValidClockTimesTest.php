<?php

namespace App\Tests;

use App\NumberOfValidClockTimes;
use PHPUnit\Framework\TestCase;

class NumberOfValidClockTimesTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testCountTime(string $time, int $expected): void
    {
        $numberOfValidClockTimes = new NumberOfValidClockTimes();
        $this->assertEquals($expected, $numberOfValidClockTimes->countTime($time));
    }

    public function dataProvider(): array
    {
        return [
            ["?2:16", 3],
            ['?5:00', 2],
            ['0?:0?', 100],
            ['??:??', 1440],
        ];
    }
}
