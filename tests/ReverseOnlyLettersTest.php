<?php

namespace App\Tests;

use App\ReverseOnlyLetters;
use PHPUnit\Framework\TestCase;

class ReverseOnlyLettersTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testReverseOnlyLetters(string $str, string $expected): void
    {
        $reverseOnlyLetters = new ReverseOnlyLetters();
        $result = $reverseOnlyLetters->reverseOnlyLetters($str);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            ['Test1ng-Leet=code-Q!', 'Qedo1ct-eeLg=ntse-T!'],
            ['a-bC-dEf-ghIj', 'j-Ih-gfE-dCba'],
            ['ab-cd', 'dc-ba']
        ];
    }
}
