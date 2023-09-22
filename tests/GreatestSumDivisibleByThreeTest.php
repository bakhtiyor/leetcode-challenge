<?php

namespace App\Tests;

use App\GreatestSumDivisibleByThree;
use PHPUnit\Framework\TestCase;

class GreatestSumDivisibleByThreeTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testMaxSumDivThree(array $nums, int $expected): void
    {
        $this->assertEquals($expected, (new GreatestSumDivisibleByThree())->maxSumDivThree($nums));
    }

    public function dataProvider(): array
    {
        return [
            [[3, 6, 5, 1, 8], 18],
            [[4], 0],
            [[1, 2, 3, 4, 4], 12],
        ];
    }
}
