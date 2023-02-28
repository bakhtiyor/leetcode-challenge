<?php

namespace App\Tests;

use App\DayOfTheYear;
use PHPUnit\Framework\TestCase;

class DayOfTheYearTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testDayOfYear(int $expected, string $date): void
    {
        $dayOfTheYear = new DayOfTheYear();
        $result = $dayOfTheYear->dayOfYear($date);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [122, '1900-05-02'],
            [61, '2004-03-01'],
            [9, '2019-01-09'],
            [41, '2019-02-10'],
        ];
    }
}
