<?php

namespace App\Tests;

use App\MultiplyStrings;
use PHPUnit\Framework\TestCase;

class MultiplyStringsTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testMultiply(string $num1, string $num2, string $expected): void
    {
        $multiplyStrings = new MultiplyStrings();
        $result = $multiplyStrings->multiply($num1, $num2);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            ['12', '123', '1476'],
            ['2', '3', '6'],
            ['123', '456', '56088'],
            ['12', '987', '11844'],
        ];
    }
}
