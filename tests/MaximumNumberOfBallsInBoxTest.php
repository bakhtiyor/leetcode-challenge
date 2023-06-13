<?php

namespace App\Tests;

use App\MaximumNumberOfBallsInBox;
use PHPUnit\Framework\TestCase;

class MaximumNumberOfBallsInBoxTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testCountBalls(int $lowLimit, int $highLimit, int $expected): void
    {
        $maximumNumberOfBallsInBox = new MaximumNumberOfBallsInBox();
        $this->assertEquals($expected, $maximumNumberOfBallsInBox->countBalls($lowLimit, $highLimit));
    }

    public function dataProvider(): array
    {
        return [
            [1, 10, 2],
            [5, 15, 2],
            [19, 28, 2],
        ];
    }
}
