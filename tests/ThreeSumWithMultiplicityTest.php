<?php

namespace App\Tests;

use App\ThreeSumWithMultiplicity;
use PHPUnit\Framework\TestCase;

class ThreeSumWithMultiplicityTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testThreeSumMulti(array $arr, int $target, int $expected): void
    {
        $obj = new ThreeSumWithMultiplicity();
        $this->assertEquals($expected, $obj->threeSumMulti($arr, $target));
    }

    public function dataProvider(): array
    {
        return [
            [[1, 1, 2, 2, 3, 3, 4, 4, 5, 5], 8, 20],
            [[1, 1, 2, 2, 2, 2], 5, 12],
            [[2, 1, 3], 6, 1],
        ];
    }
}
