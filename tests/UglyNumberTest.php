<?php

namespace App\Tests;

use App\UglyNumber;
use PHPUnit\Framework\TestCase;

class UglyNumberTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testIsUgly(int $number, bool $expected): void
    {
        $uglyNumber = new UglyNumber();
        $result = $uglyNumber->isUgly($number);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [0, false],
            [-2147483648, false],
            [75, true],
            [6, true],
            [1, true],
            [14, false]
        ];
    }
}
