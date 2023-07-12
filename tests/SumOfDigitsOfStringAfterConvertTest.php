<?php

namespace App\Tests;

use App\SumOfDigitsOfStringAfterConvert;
use PHPUnit\Framework\TestCase;

class SumOfDigitsOfStringAfterConvertTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testGetLucky(string $str, int $k, int $expected): void
    {
        $sut = new SumOfDigitsOfStringAfterConvert();
        $this->assertEquals($expected, $sut->getLucky($str, $k));
    }

    public function dataProvider(): array
    {
        return [
            ['iiii', 1, 36],
            ['leetcode', 2, 6],
            ['zbax', 2, 8]
        ];
    }
}
