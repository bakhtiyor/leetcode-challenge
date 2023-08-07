<?php

namespace App\Tests;

use App\MinimumCostOfBuyingCandiesWithDiscount;
use PHPUnit\Framework\TestCase;

class MinimumCostOfBuyingCandiesWithDiscountTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testMinimumCost(array $cost, int $expected): void
    {
        $obj = new MinimumCostOfBuyingCandiesWithDiscount();
        $this->assertEquals($expected, $obj->minimumCost($cost));
    }

    public function dataProvider(): array
    {
        return [
            [[1,2,3], 5],
            [[6,5,7,9,2,2], 23],
            [[5,5], 10],
        ];
    }
}
