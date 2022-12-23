<?php

namespace App\Tests;

use App\MinimumChangesToMakeAlternatingBinaryString;
use PHPUnit\Framework\TestCase;

class MinimumChangesToMakeAlternatingBinaryStringTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testMinOperations(string $str, int $expected): void
    {
        $minimumChangesToMakeAlternatingBinaryString = new MinimumChangesToMakeAlternatingBinaryString();
        $result = $minimumChangesToMakeAlternatingBinaryString->minOperations($str);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            ['0100', 1],
            ['10', 0],
            ['1111', 2]
        ];
    }
}
