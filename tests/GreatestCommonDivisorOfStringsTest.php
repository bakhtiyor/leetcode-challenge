<?php

namespace App\Tests;

use App\GreatestCommonDivisorOfStrings;
use PHPUnit\Framework\TestCase;

class GreatestCommonDivisorOfStringsTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testGcdOfStrings(string $str1, string $str2, string $expected): void
    {
        $greatestCommonDivisorOfStrings = new GreatestCommonDivisorOfStrings();
        $result = $greatestCommonDivisorOfStrings->gcdOfStrings($str1, $str2);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            ['ABCABC', 'ABC', 'ABC'],
            ['ABABAB', 'ABAB', 'AB'],
            ['LEET', 'CODE', '']
        ];
    }
}
