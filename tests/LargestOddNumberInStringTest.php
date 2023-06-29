<?php

namespace App\Tests;

use App\LargestOddNumberInString;
use PHPUnit\Framework\TestCase;

class LargestOddNumberInStringTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testLargestOddNumber(string $num, string $expected): void
    {
        $largestOddNumberInString = new LargestOddNumberInString();
        $this->assertEquals($expected, $largestOddNumberInString->largestOddNumber($num));
    }

    public function dataProvider(): array
    {
        return [
            ['52', '5'],
            ['4206', ''],
            ['35427', '35427'],
        ];
    }
}
