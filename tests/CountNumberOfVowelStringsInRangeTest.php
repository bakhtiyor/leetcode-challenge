<?php

namespace App\Tests;

use App\CountNumberOfVowelStringsInRange;
use PHPUnit\Framework\TestCase;

class CountNumberOfVowelStringsInRangeTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testVowelStrings(array $words, int $left, int $right, int $expected): void
    {
        $countNumberOfVowelStringsInRange = new CountNumberOfVowelStringsInRange();
        $result = $countNumberOfVowelStringsInRange->vowelStrings($words, $left, $right);

        $this->assertEquals($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [['are', 'amy', 'u'], 0, 2, 2],
            [['hey', 'aeo', 'mu', 'ooo', 'artro'], 1, 4, 3],
        ];
    }
}
