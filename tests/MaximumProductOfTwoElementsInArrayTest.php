<?php

namespace App\Tests;

use App\MaximumProductOfTwoElementsInArray;
use PHPUnit\Framework\TestCase;

class MaximumProductOfTwoElementsInArrayTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testMaxProduct(array $nums, int $expected): void
    {
        $sut = new MaximumProductOfTwoElementsInArray();
        $this->assertEquals($expected, $sut->maxProduct($nums));
    }

    public function dataProvider(): array
    {
        return [
            [[3, 4, 5, 2], 12],
            [[1, 5, 4, 5], 16],
            [[3, 7], 12],
        ];
    }
}
