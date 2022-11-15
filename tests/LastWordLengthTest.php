<?php

namespace App\Tests;

use App\LastWordLength;
use PHPUnit\Framework\TestCase;

class LastWordLengthTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testLengthOfLastWord(string $str, int $expected): void
    {
        $lastWordLength = new LastWordLength();
        $result = $lastWordLength->lengthOfLastWord($str);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            ["Hello World", 5],
            ["   fly me   to   the moon  ", 4],
            ["luffy is still joyboy", 6]
        ];
    }
}
