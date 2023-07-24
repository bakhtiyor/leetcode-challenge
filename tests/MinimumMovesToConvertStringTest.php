<?php

namespace App\Tests;

use App\MinimumMovesToConvertString;
use PHPUnit\Framework\TestCase;

class MinimumMovesToConvertStringTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testMinimumMoves(string $str, int $expected): void
    {
        $minimumMovesToConvertString = new MinimumMovesToConvertString();
        $this->assertEquals($expected, $minimumMovesToConvertString->minimumMoves($str));
    }

    public function dataProvider(): array
    {
        return [
            ['XXX', 1],
            ['XXOX', 2],
            ['OOOO', 0],
        ];
    }
}
