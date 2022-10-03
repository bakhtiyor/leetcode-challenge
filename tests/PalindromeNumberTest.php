<?php

namespace App\Tests;

use App\PalindromeNumber;
use App\TwoSum;
use PHPUnit\Framework\TestCase;

class PalindromeNumberTest extends TestCase
{
    /** @dataProvider isPalindromeDataProvider */
    public function testIsPalindrome(int $number, bool $expected): void
    {
        $palindromeNumber = new PalindromeNumber();
        $result = $palindromeNumber->isPalindrome($number);
        $this->assertSame($expected, $result);
    }

    public function isPalindromeDataProvider(): array
    {
        return [
            [121, true],
            [-121, false],
            [10, false],
            [123231, false],
            [8730378, true],
            [7055684, false],
        ];
    }
}
