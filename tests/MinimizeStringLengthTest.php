<?php

namespace App\Tests;

use App\MinimizeStringLength;
use PHPUnit\Framework\TestCase;

class MinimizeStringLengthTest extends TestCase
{
    /**  @dataProvider dataProvider */
    public function testMinimizedStringLength(string $str, int $expected): void
    {
        $minimizeStringLength = new MinimizeStringLength();
        $this->assertEquals($expected, $minimizeStringLength->minimizedStringLength($str));
    }

    public function dataProvider(): array
    {
        return [
            ['aaabc', 3],
            ['cbbd', 3],
            ['dddaaa', 2],
        ];
    }
}
