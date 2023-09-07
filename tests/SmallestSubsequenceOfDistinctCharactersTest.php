<?php

namespace App\Tests;

use App\SmallestSubsequenceOfDistinctCharacters;
use PHPUnit\Framework\TestCase;

class SmallestSubsequenceOfDistinctCharactersTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testSmallestSubsequence(string $str, string $expected): void
    {
        $obj = new SmallestSubsequenceOfDistinctCharacters();
        $result = $obj->smallestSubsequence($str);
        $this->assertEquals($result, $expected);
    }

    public function dataProvider(): array
    {
        return [
            ['bcabc', 'abc'],
            ['cbacdcbc', 'acdb']
        ];
    }
}
