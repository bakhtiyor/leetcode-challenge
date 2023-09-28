<?php

namespace App\Tests;

use App\RichestCustomerWealth;
use PHPUnit\Framework\TestCase;

class RichestCustomerWealthTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testMaximumWealth(array $accounts, int $expected): void
    {
        $obj = new RichestCustomerWealth();
        $this->assertEquals($expected, $obj->maximumWealth($accounts));
    }

    public function dataProvider(): array
    {
        return [
            [[[1,2,3],[3,2,1]], 6],
            [[[1,5],[7,3],[3,5]], 10],
            [[[2,8,7],[7,1,3],[1,9,5]], 17]
        ];
    }
}
