<?php

namespace App\Tests;

use App\CountOddNumbersInIntervalRange;
use PHPUnit\Framework\TestCase;

class CountOddNumbersInIntervalRangeTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testCountOdds(int $low, int $high, int $expected): void
    {
        $countOddNumbersInIntervalRange = new CountOddNumbersInIntervalRange();
        $result = $countOddNumbersInIntervalRange->countOdds($low, $high);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [14, 17, 2],
            [21, 22, 1],
            [798273637, 970699661, 86213013],
            [3, 7, 3],
            [8, 10, 1]
        ];
    }
}
