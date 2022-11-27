<?php

namespace App\Tests;

use App\FirstUniqueCharacter;
use PHPUnit\Framework\TestCase;

class FirstUniqueCharacterTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testFirstUniqChar(string $str, int $expected): void
    {
        $firstUniqueCharacter = new FirstUniqueCharacter();
        $result = $firstUniqueCharacter->firstUniqChar($str);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            ['leetcode', 0],
            ['loveleetcode', 2],
            ['aabb', -1]
        ];
    }
}
