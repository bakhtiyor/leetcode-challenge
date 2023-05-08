<?php

namespace App\Tests;

use App\ReversePrefixOfWord;
use PHPUnit\Framework\TestCase;

class ReversePrefixOfWordTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testReversePrefix(string $word, string $ch, string $expected): void
    {
        $obj = new ReversePrefixOfWord();
        $result = $obj->reversePrefix($word, $ch);

        $this->assertEquals($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            ['abcdefd', 'd', 'dcbaefd'],
            ['xyxzxe', 'z', 'zxyxxe'],
            ['abcd', 'z', 'abcd']
        ];
    }
}
