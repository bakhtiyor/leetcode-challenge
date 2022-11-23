<?php

namespace App\Tests;

use App\ThreeSum;
use PHPUnit\Framework\TestCase;

class ThreeSumTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testThreeSum(array $nums, array $expected): void
    {
        $threeSum = new ThreeSum();
        $result = $threeSum->threeSum($nums);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [
                [-1,0,1,2,-1,-4],
                [[-1,-1,2],[-1,0,1]]
            ],
            [
                [0,1,1],
                []
            ],
            [
                [0,0,0],
                [[0,0,0]]
            ]
        ];
    }
}
