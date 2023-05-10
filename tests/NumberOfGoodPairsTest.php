<?php

namespace App\Tests;

use App\NumberOfGoodPairs;
use PHPUnit\Framework\TestCase;

class NumberOfGoodPairsTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testNumIdenticalPairs(array $nums, int $expected): void
    {
        $this->assertEquals($expected, (new NumberOfGoodPairs())->numIdenticalPairs($nums));
    }

    public function dataProvider(): array
    {
        return [
            [[1, 2, 3, 1, 1, 3], 4],
            [[1, 1, 1, 1], 6],
            [[1, 2, 3], 0],
        ];
    }
}
