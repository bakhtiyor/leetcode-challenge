<?php

namespace App\Tests;

use App\IncreasingDecreasingString;
use PHPUnit\Framework\TestCase;

class IncreasingDecreasingStringTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testSortString(string $str, string $expected): void
    {
        $sut = new IncreasingDecreasingString();
        $this->assertEquals($expected, $sut->sortString($str));
    }

    public function dataProvider(): array
    {
        return [
            ['aaaabbbbcccc', 'abccbaabccba'],
            ['rat', 'art']
        ];
    }
}
