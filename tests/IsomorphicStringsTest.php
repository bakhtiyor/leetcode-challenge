<?php

namespace App\Tests;

use App\IsomorphicStrings;
use PHPUnit\Framework\TestCase;

class IsomorphicStringsTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testIsIsomorphic(string $s, string $t, bool $expected): void
    {
        $isomorphicStrings = new IsomorphicStrings();
        $result = $isomorphicStrings->isIsomorphic($s, $t);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            ['egg', 'add', true],
            ['foo', 'bar', false],
            ['paper', 'title', true]
        ];
    }
}
