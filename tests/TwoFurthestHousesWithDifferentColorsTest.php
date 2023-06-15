<?php

namespace App\Tests;

use App\TwoFurthestHousesWithDifferentColors;
use PHPUnit\Framework\TestCase;

class TwoFurthestHousesWithDifferentColorsTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testMaxDistance(array $colors, int $expected): void
    {
        $sut = new TwoFurthestHousesWithDifferentColors();
        $this->assertEquals($expected, $sut->maxDistance($colors));
    }

    public function dataProvider(): array
    {
        return [
            [[1, 1, 1, 6, 1, 1, 1], 3],
            [[1, 8, 3, 8, 3], 4],
            [[0, 1], 1],
        ];
    }
}
