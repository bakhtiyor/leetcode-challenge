<?php

namespace App\Tests;

use App\MaximumSubarray;
use PHPUnit\Framework\TestCase;

class MaximumSubarrayTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testMaxSubArray(array $nums, int $expected): void
    {
        $maximumSubarray = new MaximumSubarray();
        $this->assertEquals($expected, $maximumSubarray->maxSubArray($nums));
    }

    public function dataProvider(): array
    {
        return [
            [[-2,1,-3,4,-1,2,1,-5,4], 6],
            [[1], 1],
            [[5,4,-1,7,8], 23],
        ];
    }
}
