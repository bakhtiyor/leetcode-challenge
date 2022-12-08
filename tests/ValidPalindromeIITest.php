<?php

namespace App\Tests;

use App\ValidPalindromeII;
use PHPUnit\Framework\TestCase;

class ValidPalindromeIITest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testValidPalindrome(string $str, bool $expected): void
    {
        $validPalindromeII = new ValidPalindromeII();
        $result = $validPalindromeII->validPalindrome($str);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            ['abc', false],
            ['abca', true],
            ['aba', true],
        ];
    }
}
