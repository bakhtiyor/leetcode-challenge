<?php

namespace App\Tests;

use App\WaterBottles;
use PHPUnit\Framework\TestCase;

class WaterBottlesTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testNumWaterBottles(int $numBottles, int $numExchange, int $expected): void
    {
        $waterBottles = new WaterBottles();
        $this->assertEquals($expected, $waterBottles->numWaterBottles($numBottles, $numExchange));
    }

    public function dataProvider(): array
    {
        return [
            [9, 3, 13],
            [15, 4, 19],
            [5, 5, 6],
            [2, 3, 2],
        ];
    }
}
