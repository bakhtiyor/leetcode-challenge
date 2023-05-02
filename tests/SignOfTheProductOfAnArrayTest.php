<?php

namespace App\Tests;

use App\SignOfTheProductOfAnArray;
use PHPUnit\Framework\TestCase;

class SignOfTheProductOfAnArrayTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testArraySign(array $nums, int $expected): void
    {
        $obj = new SignOfTheProductOfAnArray();
        $this->assertEquals($expected, $obj->arraySign($nums));
    }

    public function dataProvider(): array
    {
        return [
            [[-1,-2,-3,-4,3,2,1], 1],
            [[1,5,0,2,-3], 0],
            [[-1,1,-1,1,-1], -1],
        ];
    }
}
