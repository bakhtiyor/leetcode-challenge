<?php

namespace App\Tests;

use App\BuyTwoChocolates;
use PHPUnit\Framework\TestCase;

class BuyTwoChocolatesTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testBuyChoco(array $prices, int $money, int $expected): void
    {
        $sut = new BuyTwoChocolates();
        $this->assertEquals($expected, $sut->buyChoco($prices, $money));
    }

    public function dataProvider(): array
    {
        return [
            [[1, 2, 2], 3, 0],
            [[3, 2, 3], 3, 3],
        ];
    }
}
