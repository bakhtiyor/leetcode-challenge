<?php

namespace App\Tests;

use App\CountPrefixesOfAGivenString;
use PHPUnit\Framework\TestCase;

class CountPrefixesOfAGivenStringTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testCountPrefixes(array $words, string $str, int $expected): void
    {
        $countPrefixesOfAGivenString = new CountPrefixesOfAGivenString();
        $this->assertEquals($expected, $countPrefixesOfAGivenString->countPrefixes($words, $str));
    }

    public function dataProvider(): array
    {
        return [
            [
                'words' => ["a", "b", "c", "ab", "bc", "abc"],
                'str' => "abc",
                'expected' => 3
            ],
            [
                'words' => ["a", "a"],
                'str' => "aa",
                'expected' => 2
            ]
        ];
    }
}
