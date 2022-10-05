<?php

namespace App\Tests;

use App\PalindromeNumber;
use App\TwoSum;
use App\ValidPalindrome;
use PHPUnit\Framework\TestCase;

class ValidPalindromeTest extends TestCase
{
    /** @dataProvider validPalindromeDataProvider */
    public function testIsValidPalindrome(string $str, bool $expected): void
    {
        $palindromeNumber = new ValidPalindrome();
        $result = $palindromeNumber->isPalindrome($str);
        $this->assertSame($expected, $result);
    }

    public function validPalindromeDataProvider(): array
    {
        return [
            ['A man, a plan, a canal: Panama', true],
            ['race a car', false],
            [' ', true],
            ['123 321', true],
        ];
    }
}
