<?php

namespace App\Tests;

use App\TwoSum;
use PHPUnit\Framework\TestCase;

class TwoSumTest extends TestCase
{
    /** @dataProvider twoSumDataProvider */
    public function testTwoSum(array $nums, int $target, array $expected): void
    {
        $twoSum = new TwoSum();
        $result = $twoSum->twoSum($nums, $target);
        $this->assertEquals($expected, $result);
    }

    public function twoSumDataProvider(): array
    {
        return [
            [[2,7,11,15], 9, [0,1]],
            [[3,2,4], 6, [1,2]],
            [[3,3], 6, [0,1]]
        ];
    }
}
