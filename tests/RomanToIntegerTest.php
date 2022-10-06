<?php

namespace App\Tests;

use App\PalindromeNumber;
use App\RomanToInteger;
use App\TwoSum;
use App\ValidPalindrome;
use PHPUnit\Framework\TestCase;

class RomanToIntegerTest extends TestCase
{
    /** @dataProvider romanToIntegerDataProvider */
    public function testRomanToInt(string $str, int $expected): void
    {
        $romanToInteger = new RomanToInteger();
        $result = $romanToInteger->romanToInt($str);
        $this->assertSame($expected, $result);
    }

    public function romanToIntegerDataProvider(): array
    {
        return [
            ['III', 3],
            ['LVIII', 58],
            ['MCMXCIV', 1994]
        ];
    }
}
