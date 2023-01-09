<?php

namespace App\Tests;

use App\ContainerWithMostWater;
use PHPUnit\Framework\TestCase;

class ContainerWithMostWaterTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testMaxArea(array $heights, int $expected): void
    {
        $containerWithMostWater = new ContainerWithMostWater();
        $result = $containerWithMostWater->maxArea($heights);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [[1,8,6,2,5,4,8,3,7], 49],
            [[1,1], 1]
        ];
    }
}
