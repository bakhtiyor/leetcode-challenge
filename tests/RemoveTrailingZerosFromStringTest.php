<?php

namespace App\Tests;

use App\RemoveTrailingZerosFromString;
use PHPUnit\Framework\TestCase;

class RemoveTrailingZerosFromStringTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testRemoveTrailingZeros(string $num, string $expected)
    {
        $removeTrailingZerosFromString = new RemoveTrailingZerosFromString();
        $result = $removeTrailingZerosFromString->removeTrailingZeros($num);

        $this->assertEquals($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            ['51230100', '512301'],
            ['123', '123']
        ];
    }
}
