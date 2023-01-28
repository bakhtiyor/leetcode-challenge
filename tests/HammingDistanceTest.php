<?php

namespace App\Tests;

use App\HammingDistance;
use PHPUnit\Framework\TestCase;

class HammingDistanceTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testHammingDistance(int $x, int $y, int $expected): void
    {
        $hammingDistance = new HammingDistance();
        $result = $hammingDistance->hammingDistance($x, $y);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [1, 4, 2],
            [4, 14, 2],
            [8, 8, 0],
            [3, 1, 1],
            [5, 5, 0]
        ];
    }
}
