<?php

namespace App\Tests;

use App\MaximumProductOfThreeNumbers;
use PHPUnit\Framework\TestCase;

class MaximumProductOfThreeNumbersTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testMaximumProduct(array $nums, int $expected): void
    {
        $obj = new MaximumProductOfThreeNumbers();
        $result  = $obj->maximumProduct($nums);
        $this->assertEquals($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [[-100,-98,-1,2,3,4], 39200],
            [[1,2,3], 6],
            [[1,2,3,4], 24],
            [[-1,-2,-3], -6]
        ];
    }
}
