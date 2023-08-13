<?php

namespace App\Tests;

use App\MaximumAscendingSubarraySum;
use PHPUnit\Framework\TestCase;

class MaximumAscendingSubarraySumTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testMaxAscendingSum(array $nums, int $expected): void
    {
        $sut = new MaximumAscendingSubarraySum();
        $this->assertEquals($expected, $sut->maxAscendingSum($nums));
    }

    public function dataProvider(): array
    {
        return [
            [[10, 20, 30, 5, 10, 50], 65],
            [[10, 20, 30, 40, 50], 150],
            [[12, 17, 15, 13, 10, 11, 12], 33],
        ];
    }
}
