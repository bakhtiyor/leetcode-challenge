<?php

namespace App\Tests;

use App\NumberOfRectangles;
use PHPUnit\Framework\TestCase;

class NumberOfRectanglesTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testCountGoodRectangles(array $rectangles, int $expected): void
    {
        $numberOfRectangles = new NumberOfRectangles();
        $result = $numberOfRectangles->countGoodRectangles($rectangles);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [[[5,8],[3,9],[5,12],[16,5]], 3],
            [[[2,3],[3,7],[4,3],[3,7]], 3],
        ];
    }
}
