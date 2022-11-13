<?php

namespace App\Tests;

use App\ReverseWordsInString;
use PHPUnit\Framework\TestCase;

class ReverseWordsInStringTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testReverseWords(string $str, string $expected): void
    {
        $reverseWordsInString = new ReverseWordsInString();
        $result = $reverseWordsInString->reverseWords($str);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            ["  hello   world  ", "world hello"],
            ["a good   example", "example good a"],
            ["the sky is blue", "blue is sky the"]
        ];
    }
}
