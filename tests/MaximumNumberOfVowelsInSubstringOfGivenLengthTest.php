<?php

namespace App\Tests;

use App\MaximumNumberOfVowelsInSubstringOfGivenLength;
use PHPUnit\Framework\TestCase;

class MaximumNumberOfVowelsInSubstringOfGivenLengthTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testMaxVowels(string $str, int $k, int $expected): void
    {
        $this->assertEquals($expected, (new MaximumNumberOfVowelsInSubstringOfGivenLength())->maxVowels($str, $k));
    }

    public function dataProvider(): array
    {
        return [
            ['abciiidef', 3, 3],
            ['aeiou', 2, 2],
            ['leetcode', 3, 2],
        ];
    }
}
