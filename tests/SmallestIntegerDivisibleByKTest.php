<?php

namespace App\Tests;

use App\SmallestIntegerDivisibleByK;
use PHPUnit\Framework\TestCase;

class SmallestIntegerDivisibleByKTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testSmallestRepunitDivByK(int $k, int $expected): void
    {
        $this->assertEquals($expected, (new SmallestIntegerDivisibleByK())->smallestRepunitDivByK($k));
    }

    public function dataProvider(): array
    {
        return [
            [1, 1],
            [2, -1],
            [3, 3]
        ];
    }
}
