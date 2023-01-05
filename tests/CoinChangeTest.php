<?php

namespace App\Tests;

use App\CoinChange;
use PHPUnit\Framework\TestCase;

class CoinChangeTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testCoinChange(array $coins, int $amount, int $expected): void
    {
        $coinChange = new CoinChange();
        $result = $coinChange->coinChange($coins, $amount);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [[1,2,5], 11, 3],
            [[2], 3, -1],
            [[1], 0, 0]
        ];
    }
}
