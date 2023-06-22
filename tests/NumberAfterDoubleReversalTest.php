<?php

namespace App\Tests;

use App\NumberAfterDoubleReversal;
use PHPUnit\Framework\TestCase;

class NumberAfterDoubleReversalTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testIsSameAfterReversals(int $num, bool $expected): void
    {
        $sut = new NumberAfterDoubleReversal();
        $this->assertEquals($expected, $sut->isSameAfterReversals($num));
    }

    public function dataProvider(): array
    {
        return [
            [526, true],
            [1800, false],
            [0, true],
        ];
    }
}
