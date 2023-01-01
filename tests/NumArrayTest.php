<?php

namespace App\Tests;

use App\RangeSumQuery;
use PHPUnit\Framework\TestCase;

class NumArrayTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testSumRange(array $nums, int $left, int $right, int $expected): void
    {
        $rangeSumQuery = new RangeSumQuery($nums);
        $result = $rangeSumQuery->sumRange($left, $right);

        $this->assertSame($expected, $result);
    }

    /**
     * @return array
     */
    public function dataProvider(): array
    {
        return [
            [[-2, 0, 3, -5, 2, -1], 0, 2, 1],
            [[-2, 0, 3, -5, 2, -1], 0, 5, -3],
            [[-2, 0, 3, -5, 2, -1], 2, 5, -1],
        ];
    }
}
