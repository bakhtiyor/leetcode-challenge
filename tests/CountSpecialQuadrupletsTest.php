<?php

namespace App\Tests;

use App\CountSpecialQuadruplets;
use PHPUnit\Framework\TestCase;

class CountSpecialQuadrupletsTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testCountQuadruplets(array $nums, int $expected): void
    {
        $this->assertEquals($expected, (new CountSpecialQuadruplets())->countQuadruplets($nums));
    }

    public function dataProvider(): array
    {
        return [
            [[1, 2, 3, 6], 1],
            [[3, 3, 6, 4, 5], 0],
            [[1, 1, 1, 3, 5], 4],
        ];
    }
}
