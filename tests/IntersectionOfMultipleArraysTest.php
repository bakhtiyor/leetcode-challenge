<?php

namespace App\Tests;

use App\IntersectionOfMultipleArrays;
use PHPUnit\Framework\TestCase;

class IntersectionOfMultipleArraysTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testIntersection(array $nums, array $expected): void
    {
        $sut = new IntersectionOfMultipleArrays();
        $this->assertEquals($expected, $sut->intersection($nums));
    }

    public function dataProvider(): array
    {
        return [
            [
                'nums' => [[3, 1, 2, 4, 5], [1, 2, 3, 4], [3, 4, 5, 6]],
                'expected' => [3, 4],
            ],
            [
                'nums' => [[1, 2, 3], [4, 5, 6]],
                'expected' => [],
            ],
        ];
    }
}
