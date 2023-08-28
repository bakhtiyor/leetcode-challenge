<?php

namespace App\Tests;

use App\NumberOfDaysBetweenTwoDates;
use PHPUnit\Framework\TestCase;

class NumberOfDaysBetweenTwoDatesTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testDaysBetweenDates(string $date1, string $date2, int $expected): void
    {
        $this->assertEquals($expected, (new NumberOfDaysBetweenTwoDates())->daysBetweenDates($date1, $date2));
    }

    public function dataProvider(): array
    {
        return [
            ['2019-06-29', '2019-06-30', 1],
            ['2020-01-15', '2019-12-31', 15],
        ];
    }
}
