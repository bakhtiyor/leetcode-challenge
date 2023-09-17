<?php

namespace App\Tests;

use App\RankTransformOfArray;
use PHPUnit\Framework\TestCase;

class RankTransformOfArrayTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testArrayRankTransform(array $arr, array $expected): void
    {
        $sut = new RankTransformOfArray();
        $this->assertEquals($expected, $sut->arrayRankTransform($arr));
    }

    public function dataProvider(): array
    {
        return [
            [[40, 10, 20, 30], [4, 1, 2, 3]],
            [[100, 100, 100], [1, 1, 1]],
            [[37, 12, 28, 9, 100, 56, 80, 5, 12], [5, 3, 4, 2, 8, 6, 7, 1, 3]],
        ];
    }
}
