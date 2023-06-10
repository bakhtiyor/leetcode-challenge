<?php

namespace App\Tests;

use App\NumberOfStepsToReduceNumberToZero;
use PHPUnit\Framework\TestCase;

class NumberOfStepsToReduceNumberToZeroTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testNumberOfSteps(int $num, int $expected): void
    {
        $sut = new NumberOfStepsToReduceNumberToZero();
        $this->assertEquals($expected, $sut->numberOfSteps($num));
    }

    public function dataProvider(): array
    {
        return [
            [14, 6],
            [8, 4],
            [123, 12],
        ];
    }
}
