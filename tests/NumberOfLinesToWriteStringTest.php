<?php

namespace App\Tests;

use App\NumberOfLinesToWriteString;
use PHPUnit\Framework\TestCase;

class NumberOfLinesToWriteStringTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testNumberOfLines(array $widths, string $s, array $expected): void
    {
        $numberOfLinesToWriteString = new NumberOfLinesToWriteString();
        $result = $numberOfLinesToWriteString->numberOfLines($widths, $s);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [
                [4,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10],
                'bbbcccdddaaa',
                [2,4]
            ],
            [
                [10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10],
                'abcdefghijklmnopqrstuvwxyz',
                [3,60]
            ],
        ];
    }
}
