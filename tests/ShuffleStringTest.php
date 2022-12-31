<?php

namespace App\Tests;

use App\ShuffleString;
use PHPUnit\Framework\TestCase;

class ShuffleStringTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testRestoreString(string $str, array $indices, string $expected): void
    {
        $shuffleString = new ShuffleString();
        $result = $shuffleString->restoreString($str, $indices);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            ['codeleet', [4,5,6,7,0,2,1,3], 'leetcode'],
            ['abc', [0,1,2], 'abc']
        ];
    }
}
