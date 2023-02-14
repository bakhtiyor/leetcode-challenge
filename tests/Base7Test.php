<?php

namespace App\Tests;

use App\Base7;
use PHPUnit\Framework\TestCase;

class Base7Test extends TestCase
{
    /** @dataProvider dataProvider */
    public function testConvertToBase7(int $number, string $expected): void
    {
        $base7 = new Base7();
        $result = $base7->convertToBase7($number);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [0, '0'],
            [100, '202'],
            [-7, '-10']
        ];
    }
}
