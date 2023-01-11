<?php

namespace App\Tests;

use App\LetterCombinationsOfPhoneNumber;
use PHPUnit\Framework\TestCase;

class LetterCombinationsOfPhoneNumberTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testLetterCombinations(string $digits, array $expected): void
    {
        $letterCombinationsOfPhoneNumber = new LetterCombinationsOfPhoneNumber();
        $result = $letterCombinationsOfPhoneNumber->letterCombinations($digits);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            ['23', ['ad','ae','af','bd','be','bf','cd','ce','cf']],
            ['', []],
            ['2', ['a','b','c']],
        ];
    }
}
