<?php

namespace App\Tests;

use App\FindNearestPointThatHasSameXOrYCoordinate;
use PHPUnit\Framework\TestCase;

class FindNearestPointThatHasSameXOrYCoordinateTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testNearestValidPoint(int $x, int $y, array $points, int $expected): void
    {
        $this->assertEquals($expected, (new FindNearestPointThatHasSameXOrYCoordinate())->nearestValidPoint($x, $y, $points));
    }

    public function dataProvider(): array
    {
        return [
            [3, 4, [[1,2],[3,1],[2,4],[2,3],[4,4]], 2],
            [3, 4, [[3,4]], 0],
            [3, 4, [[2,3]], -1],
        ];
    }
}
