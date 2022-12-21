<?php

namespace App\Tests;

use App\FindWordsThatCanBeFormedByCharacters;
use PHPUnit\Framework\TestCase;

class FindWordsThatCanBeFormedByCharactersTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testCountCharacters(array $words, string $chars, int $expected): void
    {
        $findWordsThatCanBeFormedByCharacters = new FindWordsThatCanBeFormedByCharacters();
        $result = $findWordsThatCanBeFormedByCharacters->countCharacters($words, $chars);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [["hello","world","leetcode"], "welldonehoneyr", 10],
            [["cat","bt","hat","tree"], "atach", 6],
        ];
    }
}
