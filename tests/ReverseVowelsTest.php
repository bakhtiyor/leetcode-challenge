<?php

namespace App\Tests;

use App\ReverseVowels;
use PHPUnit\Framework\TestCase;

class ReverseVowelsTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testReverseVowels(string $str, string $expected): void
    {
        $reverseVowels = new ReverseVowels();
        $result = $reverseVowels->reverseVowels($str);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            ['hello', 'holle'],
            ['leetcode', 'leotcede']
        ];
    }
}
