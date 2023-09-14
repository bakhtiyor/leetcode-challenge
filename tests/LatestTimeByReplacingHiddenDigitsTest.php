<?php

namespace App\Tests;

use App\LatestTimeByReplacingHiddenDigits;
use PHPUnit\Framework\TestCase;

class LatestTimeByReplacingHiddenDigitsTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testMaximumTime(string $time, string $expected): void
    {
        $this->assertEquals($expected, (new LatestTimeByReplacingHiddenDigits())->maximumTime($time));
    }

    public function dataProvider(): array
    {
        return [
            ['2?:?0', '23:50'],
            ['0?:3?', '09:39'],
            ['1?:22', '19:22'],
        ];
    }
}
