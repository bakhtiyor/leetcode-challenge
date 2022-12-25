<?php

namespace App\Tests;

use App\UniqueMorseCodeWords;
use PHPUnit\Framework\TestCase;

class UniqueMorseCodeWordsTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testUniqueMorseRepresentations(array $words, int $expected): void
    {
        $uniqueMorseCodeWords = new UniqueMorseCodeWords();
        $result = $uniqueMorseCodeWords->uniqueMorseRepresentations($words);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [["gin","zen","gig","msg"], 2],
            [["a"], 1]
        ];
    }
}
