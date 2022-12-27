<?php

namespace App\Tests;

use App\ThousandSeparator;
use PHPUnit\Framework\TestCase;

class ThousandSeparatorTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testThousandSeparator(int $n, string $expected): void
    {
        $thousandSeparator = new ThousandSeparator();
        $result = $thousandSeparator->thousandSeparator($n);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [51040, '51.040'],
            [0, '0'],
            [1234567, '1.234.567'],
            [1234, '1.234'],
            [987, '987'],
        ];
    }
}
