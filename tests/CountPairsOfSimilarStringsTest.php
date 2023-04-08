<?php

namespace App\Tests;

use App\CountPairsOfSimilarStrings;
use PHPUnit\Framework\TestCase;

class CountPairsOfSimilarStringsTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testSimilarPairs(array $words, int $expected): void
    {
        $countPairsOfSimilarStrings = new CountPairsOfSimilarStrings();
        $this->assertEquals($expected, $countPairsOfSimilarStrings->similarPairs($words));
    }

    public function dataProvider(): array
    {
        return [
            [
                'words' => ["aba", "aabb", "abcd", "bac", "aabc"],
                'expected' => 2,
            ],
            [
                'words' => ["nba", "cba", "dba"],
                'expected' => 0,
            ],
        ];
    }
}
