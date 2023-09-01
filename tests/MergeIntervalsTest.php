<?php

namespace App\Tests;

use App\MergeIntervals;
use PHPUnit\Framework\TestCase;

class MergeIntervalsTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testMerge(array $intervals, array $expected): void
    {
        $mergeIntervals = new MergeIntervals();
        $this->assertEquals($expected, $mergeIntervals->merge($intervals));
    }

    public function dataProvider(): array
    {
        return [
            [
                'intervals' => [[1, 3], [2, 6], [8, 10], [15, 18]],
                'expected' => [[1, 6], [8, 10], [15, 18]]
            ],
            [
                'intervals' => [[1, 4], [4, 5]],
                'expected' => [[1, 5]]
            ]
        ];
    }
}
