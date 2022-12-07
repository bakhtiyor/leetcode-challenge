<?php

namespace App\Tests;

use App\ArrangingCoins;
use PHPUnit\Framework\TestCase;

class ArrangingCoinsTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testArrangeCoins(int $n, int $expected): void
    {
        $arrangingCoins = new ArrangingCoins();
        $result = $arrangingCoins->arrangeCoins($n);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [3, 2],
            [1, 1],
            [5, 2],
            [8, 3]
        ];
    }
}
