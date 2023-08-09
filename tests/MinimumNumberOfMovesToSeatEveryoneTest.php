<?php

namespace App\Tests;

use App\MinimumNumberOfMovesToSeatEveryone;
use PHPUnit\Framework\TestCase;

class MinimumNumberOfMovesToSeatEveryoneTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testMinMovesToSeat(array $seats, array $students, int $expected): void
    {
        $obj = new MinimumNumberOfMovesToSeatEveryone();
        $this->assertEquals($expected, $obj->minMovesToSeat($seats, $students));
    }

    public function dataProvider(): array
    {
        return [
            [[3, 1, 5], [2, 7, 4], 4],
            [[4, 1, 5, 9], [1, 3, 2, 6], 7],
            [[2, 2, 6, 6], [1, 3, 2, 6], 4],
        ];
    }
}
