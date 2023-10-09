<?php

namespace App\Tests;

use App\MaximizeDistanceToClosestPerson;
use PHPUnit\Framework\TestCase;

class MaximizeDistanceToClosestPersonTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testMaxDistToClosest(array $seats, int $expected): void
    {
        $obj = new MaximizeDistanceToClosestPerson();
        $this->assertSame($expected, $obj->maxDistToClosest($seats));
    }

    public function dataProvider(): array
    {
        return [
            [[1, 0, 0, 0, 1, 0, 1], 2],
            [[1, 0, 0, 0], 3],
            [[0, 1], 1],
        ];
    }
}
