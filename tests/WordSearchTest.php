<?php

namespace App\Tests;

use App\WordSearch;
use PHPUnit\Framework\TestCase;

class WordSearchTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testExist(array $board, string $word, bool $expected): void
    {
        $wordSearch = new WordSearch();
        $result = $wordSearch->exist($board, $word);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [
                [
                    ["A","A","A","A","A","A"],
                    ["A","A","A","A","A","A"],
                    ["A","A","A","A","A","A"],
                    ["A","A","A","A","A","A"],
                    ["A","A","A","A","A","A"],
                    ["A","A","A","A","A","A"]
                ],
                'AAAAAAAAAAAAAAa',
                false
            ],
            [
                [
                    ['A','B','C','E'],
                    ['S','F','C','S'],
                    ['A','D','E','E']
                ],
                'ABCCED',
                true
            ],
            [
                [
                    ['A','B','C','E'],
                    ['S','F','C','S'],
                    ['A','D','E','E']
                ],
                'SEE',
                true
            ],
            [
                [
                    ['A','B','C','E'],
                    ['S','F','C','S'],
                    ['A','D','E','E']
                ],
                'ABCB',
                false
            ]
        ];
    }
}
