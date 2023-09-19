<?php

namespace App\Tests;

use App\AngleBetweenHandsOfAClock;
use PHPUnit\Framework\TestCase;

class AngleBetweenHandsOfAClockTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testAngleClock(int $hour, int $minutes, float $expected): void
    {
        $sut = new AngleBetweenHandsOfAClock();
        $this->assertEquals($expected, $sut->angleClock($hour, $minutes));
    }

    public function dataProvider(): array
    {
        return [
            [12, 30, 165],
            [3, 30, 75],
            [3, 15, 7.5],
            [4, 50, 155],
            [12, 0, 0],
        ];
    }
}
