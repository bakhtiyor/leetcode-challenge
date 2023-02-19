<?php

namespace App\Tests;

use App\ReverseStringII;
use PHPUnit\Framework\TestCase;

class ReverseStringIITest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testReverseStr(string $expected, string $str, int $k): void
    {
        $reverseStringII = new ReverseStringII();
        $result = $reverseStringII->reverseStr($str, $k);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            ['abc', 'cba', 4],
            ['bacdfeg', 'abcdefg', 2],
            ['bacd', 'abcd', 2],
        ];
    }
}
