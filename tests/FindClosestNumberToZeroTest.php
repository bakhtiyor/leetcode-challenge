<?php

namespace App\Tests;

use App\FindClosestNumberToZero;
use PHPUnit\Framework\TestCase;

class FindClosestNumberToZeroTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testFindClosestNumber(array $nums, int $expected): void
    {
        $findClosestNumberToZero = new FindClosestNumberToZero();
        $this->assertEquals($expected, $findClosestNumberToZero->findClosestNumber($nums));
    }

    public function dataProvider(): array
    {
        return [
            [[-4,-2,1,4,8], 1],
            [[2,-1,1], 1]
        ];
    }
}
