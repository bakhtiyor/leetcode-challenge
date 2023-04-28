<?php

namespace App\Tests;

use App\ConsecutiveCharacters;
use PHPUnit\Framework\TestCase;

class ConsecutiveCharactersTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testMaxPower(string $str, int $expected): void
    {
        $this->assertEquals($expected, (new ConsecutiveCharacters())->maxPower($str));
    }

    public function dataProvider(): array
    {
        return [
            ['j', 1],
            ['cc', 2],
            ['leetcode', 2],
            ['abbcccddddeeeeedcba', 5],
            ['triplepillooooow', 5],
        ];
    }
}
