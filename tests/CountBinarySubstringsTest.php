<?php

namespace App\Tests;

use App\CountBinarySubstrings;
use PHPUnit\Framework\TestCase;

class CountBinarySubstringsTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testCountBinarySubstrings(string $str, int $expected): void
    {
        $this->assertEquals($expected, (new CountBinarySubstrings())->countBinarySubstrings($str));
    }

    public function dataProvider(): array
    {
        return [
            ['00110011', 6],
            ['10101', 4],
        ];
    }
}
