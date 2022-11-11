<?php

namespace App\Tests;

use App\LongestSubstringWithoutRepeatingCharacters;
use PHPUnit\Framework\TestCase;

class LongestSubstringWithoutRepeatingCharactersTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testLengthOfLongestSubstring(string $str, int $expected): void
    {
        $longestSubstringWithoutRepeatingCharacters = new LongestSubstringWithoutRepeatingCharacters();
        $result = $longestSubstringWithoutRepeatingCharacters->lengthOfLongestSubstring($str);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            ["abcabcbb", 3],
            ["bbbbb", 1],
            ["pwwkew", 3]
        ];
    }
}
