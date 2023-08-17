<?php

namespace App\Tests;

use App\SumOfAllOddLengthSubarrays;
use PHPUnit\Framework\TestCase;

class SumOfAllOddLengthSubarraysTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testSumOddLengthSubarrays(array $arr, int $expected): void
    {
        $this->assertEquals($expected, (new SumOfAllOddLengthSubarrays())->sumOddLengthSubarrays($arr));
    }

    public function dataProvider(): array
    {
        return [
            [[1, 4, 2, 5, 3], 58],
            [[1, 2], 3],
            [[10, 11, 12], 66],
        ];
    }
}
