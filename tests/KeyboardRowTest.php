<?php

namespace App\Tests;

use App\KeyboardRow;
use PHPUnit\Framework\TestCase;

class KeyboardRowTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testFindWords(array $words, array $expected): void
    {
        $keyboardRow = new KeyboardRow();
        $result = $keyboardRow->findWords($words);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [["Hello","Alaska","Dad","Peace"], ["Alaska","Dad"]],
            [["omk"], []],
            [["adsdf","sfd"], ["adsdf","sfd"]]
        ];
    }
}
