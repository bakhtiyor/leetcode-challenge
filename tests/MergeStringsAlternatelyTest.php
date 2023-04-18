<?php

namespace App\Tests;

use App\MergeStringsAlternately;
use PHPUnit\Framework\TestCase;

class MergeStringsAlternatelyTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testMergeAlternately(string $word1, string $word2, string $expected): void
    {
        $mergeStringsAlternately = new MergeStringsAlternately();
        $this->assertEquals($expected, $mergeStringsAlternately->mergeAlternately($word1, $word2));
    }

    public function dataProvider(): array
    {
        return [
            ['abc', 'pqr', 'apbqcr'],
            ['ab', 'pqrs', 'apbqrs'],
            ['abcd', 'pq', 'apbqcd'],
        ];
    }
}
