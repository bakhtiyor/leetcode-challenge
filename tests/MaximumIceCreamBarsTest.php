<?php

namespace App\Tests;

use App\MaximumIceCreamBars;
use PHPUnit\Framework\TestCase;

class MaximumIceCreamBarsTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testMaxIceCream(array $costs, int $coins, int $expected): void
    {
        $maximumIceCreamBars = new MaximumIceCreamBars();
        $result = $maximumIceCreamBars->maxIceCream($costs, $coins);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [[1,3,2,4,1], 7, 4],
            [[10,6,8,7,7,8], 5, 0],
            [[1,6,3,1,2,5], 20, 6]
        ];
    }
}
