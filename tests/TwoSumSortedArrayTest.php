<?php

namespace App\Tests;

use App\TwoSumSortedArray;
use PHPUnit\Framework\TestCase;

class TwoSumSortedArrayTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testTwoSum(array $nums, int $target, array $expected): void
    {
        $twoSumSortedArray = new TwoSumSortedArray();
        $result = $twoSumSortedArray->twoSum($nums, $target);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [[2,7,11,15], 9, [1,2]],
            [[2,3,4], 6, [1,3]]
        ];
    }
}
