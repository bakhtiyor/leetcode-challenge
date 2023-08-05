<?php

namespace App\Tests;

use App\CountCommonWordsWithOneOccurrence;
use PHPUnit\Framework\TestCase;

class CountCommonWordsWithOneOccurrenceTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testCountWords(array $words1, array $words2, int $expected): void
    {
        $sut = new CountCommonWordsWithOneOccurrence();
        $this->assertEquals($expected, $sut->countWords($words1, $words2));
    }

    public function dataProvider(): array
    {
        return [
            [
                ['leetcode', 'is', 'amazing', 'as', 'is'],
                ['amazing', 'leetcode', 'is'],
                2
            ],
            [
                ['b', 'bb', 'bbb'],
                ['a', 'aa', 'aaa'],
                0
            ],
            [
                ['a', 'ab'],
                ['a', 'a', 'a', 'ab'],
                1
            ],
        ];
    }
}
