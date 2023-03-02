<?php

namespace App\Tests;

use App\StringCompression;
use PHPUnit\Framework\TestCase;

class StringCompressionTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testCompress(int $expected, array &$chars): void
    {
        $stringCompression = new StringCompression();
        $result = $stringCompression->compress($chars);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [6, ["a","a","b","b","c","c","c"]],
            [1, ["a"]],
            [4, ["a","b","b","b","b","b","b","b","b","b","b","b","b"]],
        ];
    }
}
