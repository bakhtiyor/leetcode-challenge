<?php

namespace App\Tests;

use App\MinimumValueToGetPositiveStepByStepSum;
use PHPUnit\Framework\TestCase;

class MinimumValueToGetPositiveStepByStepSumTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testMinStartValue(array $nums, int $expected): void
    {
        $obj = new MinimumValueToGetPositiveStepByStepSum();
        $this->assertEquals($expected, $obj->minStartValue($nums));
    }

    public function dataProvider(): array
    {
        return [
            [[-3, 2, -3, 4, 2], 5],
            [[1, 2], 1],
            [[1, -2, -3], 5],
        ];
    }
}
