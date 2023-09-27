<?php

namespace App\Tests;

use App\PartitionArrayForMaximumSum;
use PHPUnit\Framework\TestCase;

class PartitionArrayForMaximumSumTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testMaxSumAfterPartitioning(array $arr, int $k, int $expected): void
    {
        $obj = new PartitionArrayForMaximumSum();
        $this->assertEquals($expected, $obj->maxSumAfterPartitioning($arr, $k));
    }

    public function dataProvider(): array
    {
        return [
            [[1,15,7,9,2,5,10], 3, 84],
            [[1,4,1,5,7,3,6,1,9,9,3], 4, 83],
            [[1], 1, 1]
        ];
    }
}
