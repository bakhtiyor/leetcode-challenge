<?php

namespace App\Tests;

use App\Maximum69Number;
use PHPUnit\Framework\TestCase;

class Maximum69NumberTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testMaximum69Number(int $num, int $expected): void
    {
        $maximum69Number = new Maximum69Number();
        $result = $maximum69Number->maximum69Number($num);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [9669, 9969],
            [9996, 9999],
            [9999, 9999],
        ];
    }
}
