<?php

namespace App\Tests;

use App\CalculateMoneyInLeetcodeBank;
use PHPUnit\Framework\TestCase;

class CalculateMoneyInLeetcodeBankTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testTotalMoney(int $n, int $expected): void
    {
        $sut = new CalculateMoneyInLeetcodeBank();
        $this->assertEquals($expected, $sut->totalMoney($n));
    }

    public function dataProvider(): array
    {
        return [
            [4, 10],
            [10, 37],
            [20, 96],
        ];
    }
}
