<?php

namespace App\Tests;

use App\CombinationSum;
use PHPUnit\Framework\TestCase;

class CombinationSumTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testCombinationSum(array $candidates, int $target, array $expected): void
    {
        $combinationSum = new CombinationSum();
        $this->assertEquals($expected, $combinationSum->combinationSum($candidates, $target));
    }

    public function dataProvider(): array
    {
        return [
            [[2, 3, 6, 7], 7, [[2, 2, 3], [7]]],
            [[2, 3, 5], 8, [[2, 2, 2, 2], [2, 3, 3], [3, 5]]],
            [[2], 1, []],
        ];
    }
}
