<?php

namespace App\Tests;

use App\LongestPalindrome;
use PHPUnit\Framework\TestCase;

class LongestPalindromeTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testLongestPalindrome(string $str, int $expected): void
    {
        $longestPalindrome = new LongestPalindrome();
        $result = $longestPalindrome->longestPalindrome($str);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            ['abccccdd', 7],
            ['a', 1],
        ];
    }
}
