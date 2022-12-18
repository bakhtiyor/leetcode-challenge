<?php

namespace App\Tests;

use App\NumberOfSegmentsInString;
use PHPUnit\Framework\TestCase;

class NumberOfSegmentsInStringTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testCountSegments(string $str, int $expected): void
    {
        $numberOfSegmentsInString = new NumberOfSegmentsInString();
        $result = $numberOfSegmentsInString->countSegments($str);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            ['Hello, my name is John', 5],
            ['Hello', 1],
            ['                ', 0],
            ['', 0],
            ['Of all the gin joints in all the towns in all the world,   ', 13],
        ];
    }
}
