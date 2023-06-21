<?php

namespace App\Tests;

use App\SplitWithMinimumSum;
use PHPUnit\Framework\TestCase;

class SplitWithMinimumSumTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testSplitNum(int $num, int $expected): void
    {
        $sut = new SplitWithMinimumSum();
        $this->assertEquals($expected, $sut->splitNum($num));
    }

    public function dataProvider(): array
    {
        return [
            [4325, 59],
            [687, 75]
        ];
    }
}
