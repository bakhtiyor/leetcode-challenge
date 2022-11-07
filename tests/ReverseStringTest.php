<?php

namespace App\Tests;

use App\ReverseString;
use PHPUnit\Framework\TestCase;

class ReverseStringTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testReverseString(array $s, array $expected): void
    {
        $reverseString = new ReverseString();
        $reverseString->reverseString($s);

        $this->assertSame($expected, $s);
    }

    public function dataProvider(): array
    {
        return [
            [["h","e","l","l","o"], ["o","l","l","e","h"]],
            [["H","a","n","n","a","h"], ["h","a","n","n","a","H"]]
        ];
    }
}
