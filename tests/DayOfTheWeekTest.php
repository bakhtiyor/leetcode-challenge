<?php

namespace App\Tests;

use App\DayOfTheWeek;
use PHPUnit\Framework\TestCase;

class DayOfTheWeekTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testDayOfTheWeek(int $day, int $month, int $year, string $expected): void
    {
        $obj = new DayOfTheWeek();
        $this->assertEquals($expected, $obj->dayOfTheWeek($day, $month, $year));
    }

    public function dataProvider(): array
    {
        return [
            [31, 8, 2019, 'Saturday'],
            [18, 7, 1999, 'Sunday'],
            [15, 8, 1993, 'Sunday'],
        ];
    }
}
