<?php

namespace App\Tests;

use App\ShortestDistanceToCharacter;
use PHPUnit\Framework\TestCase;

class ShortestDistanceToCharacterTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testShortestToChar(string $s, string $c, array $expected): void
    {
        $shortestDistanceToCharacter = new ShortestDistanceToCharacter();
        $result = $shortestDistanceToCharacter->shortestToChar($s, $c);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            ['loveleetcode', 'e', [3,2,1,0,1,0,0,1,2,2,1,0]],
            ['aaab', 'b', [3,2,1,0]]
        ];
    }
}
