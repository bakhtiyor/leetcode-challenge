<?php

namespace App\Tests;

use App\FindAllAnagramsInString;
use PHPUnit\Framework\TestCase;

class FindAllAnagramsInStringTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testFindAnagrams(string $s, string $p, array $expected): void
    {
        $findAllAnagramsInString = new FindAllAnagramsInString();
        $result = $findAllAnagramsInString->findAnagrams($s, $p);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            ['cbaebabacd', 'abc', [0, 6]],
            ['abab', 'ab', [0, 1, 2]]
        ];
    }
}
