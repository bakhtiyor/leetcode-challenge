<?php

namespace App\Tests;

use App\CheckIfAllCharactersHaveEqualNumberOfOccurrences;
use PHPUnit\Framework\TestCase;

class CheckIfAllCharactersHaveEqualNumberOfOccurrencesTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testAreOccurrencesEqual(string $str, bool $expected): void
    {
        $this->assertEquals($expected, (new CheckIfAllCharactersHaveEqualNumberOfOccurrences())->areOccurrencesEqual($str));
    }

    public function dataProvider(): array
    {
        return [
            ['abacbc', true],
            ['aaabb', false]
        ];
    }
}
