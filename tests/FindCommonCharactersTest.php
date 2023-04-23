<?php

namespace App\Tests;

use App\FindCommonCharacters;
use PHPUnit\Framework\TestCase;

class FindCommonCharactersTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testCommonChars(array $words, array $expected): void
    {
        $findCommonCharacters = new FindCommonCharacters();
        $this->assertEquals($expected, $findCommonCharacters->commonChars($words));
    }

    public function dataProvider(): array
    {
        return [
            [
                ["acabcddd","bcbdbcbd","baddbadb","cbdddcac","aacbcccd","ccccddda","cababaab","addcaccd"],
                []
            ],
            [
                [
                    'bella',
                    'label',
                    'roller',
                ],
                ['e', 'l', 'l'],
            ],
            [
                [
                    'cool',
                    'lock',
                    'cook',
                ],
                ['c', 'o'],
            ],
        ];
    }
}
