<?php

namespace App\Tests;

use App\CountNumberOfPairsWithAbsoluteDifferenceK;
use PHPUnit\Framework\TestCase;

class CountNumberOfPairsWithAbsoluteDifferenceKTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testCountKDifference(array $nums, int $k, int $expected): void
    {
        $sut = new CountNumberOfPairsWithAbsoluteDifferenceK();
        $this->assertEquals($expected, $sut->countKDifference($nums, $k));
    }

    public function dataProvider(): array
    {
        return [
            [[1, 2, 2, 1], 1, 4],
            [[1, 3], 3, 0],
            [[3, 2, 1, 5, 4], 2, 3],
        ];
    }
}
