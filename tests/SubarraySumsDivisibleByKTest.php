<?php

namespace App\Tests;

use App\SubarraySumsDivisibleByK;
use PHPUnit\Framework\TestCase;

class SubarraySumsDivisibleByKTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testSubarraysDivByK(array $nums, int $k, int $expected): void
    {
        $subarraySumsDivisibleByK = new SubarraySumsDivisibleByK();
        $result = $subarraySumsDivisibleByK->subarraysDivByK($nums, $k);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [[4,5,0,-2,-3,1], 5, 7],
            [[5], 9, 0]
        ];
    }
}
