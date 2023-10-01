<?php

namespace App\Tests;

use App\BestTimeToBuyAndSellStockWithCooldown;
use PHPUnit\Framework\TestCase;

class BestTimeToBuyAndSellStockWithCooldownTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testMaxProfit(array $prices, int $expected): void
    {
        $obj = new BestTimeToBuyAndSellStockWithCooldown();
        $this->assertSame($expected, $obj->maxProfit($prices));
    }

    public function dataProvider(): array
    {
        return [
            [[1, 2, 3, 0, 2], 3],
            [[1], 0],
        ];
    }
}
