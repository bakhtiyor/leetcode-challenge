<?php

namespace App\Tests;

use App\ClimbingStairs;
use PHPUnit\Framework\TestCase;

class ClimbingStairsTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testClimbStairs(int $n, int $expected): void
    {
        $climbingStairs = new ClimbingStairs();
        $result = $climbingStairs->climbStairs($n);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [5, 8],
            [3, 3],
            [2, 2]
        ];
    }
}
