<?php

namespace App\Tests;

use App\AlphabetBoardPath;
use PHPUnit\Framework\TestCase;

class AlphabetBoardPathTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testAlphabetBoardPath(string $target, string $expected): void
    {
        $sut = new AlphabetBoardPath();
        $this->assertEquals($expected, $sut->alphabetBoardPath($target));
    }

    public function dataProvider(): array
    {
        return [
            ['leet', 'DDR!UURRR!!DDD!'],
            ['code', 'RR!DDRR!LUU!R!']
        ];
    }
}
