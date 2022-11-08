<?php

namespace App\Tests;

use App\ReverseWords;
use PHPUnit\Framework\TestCase;

class ReverseWordsTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testReverseWords(string $s, string $expected): void
    {
        $reverseWords = new ReverseWords();
        $result = $reverseWords->reverseWords($s);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            ["Let's take LeetCode contest", "s'teL ekat edoCteeL tsetnoc"],
            ["Gos Ding", "soG gniD"]
        ];
    }
}
