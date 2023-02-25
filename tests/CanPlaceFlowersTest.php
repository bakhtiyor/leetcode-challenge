<?php

namespace App\Tests;

use App\CanPlaceFlowers;
use PHPUnit\Framework\TestCase;

class CanPlaceFlowersTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testCanPlaceFlowers(bool $expected, array $flowerbed, int $number): void
    {
        $canPlaceFlowers = new CanPlaceFlowers();
        $result = $canPlaceFlowers->canPlaceFlowers($flowerbed, $number);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [true, [0], 1],
            [true, [1,0,0,0,1,0,0], 2],
            [false, [1,0,0,0,0,1], 2],
            [false, [1,0,0,0,1], 2],
            [true, [1,0,0,0,0,0,1], 2],
            [true, [1,0,0,0,1], 1],
        ];
    }
}
