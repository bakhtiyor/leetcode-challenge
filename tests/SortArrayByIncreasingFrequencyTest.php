<?php

namespace App\Tests;

use App\SortArrayByIncreasingFrequency;
use PHPUnit\Framework\TestCase;

class SortArrayByIncreasingFrequencyTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testFrequencySort(array $nums, array $expected): void
    {
        $sortArrayByIncreasingFrequency = new SortArrayByIncreasingFrequency();
        $this->assertEquals($expected, $sortArrayByIncreasingFrequency->frequencySort($nums));
    }

    public function dataProvider(): array
    {
        return [
            [[1, 1, 2, 2, 2, 3], [3, 1, 1, 2, 2, 2]],
            [[2, 3, 1, 3, 2], [1, 3, 3, 2, 2]],
            [[-1, 1, -6, 4, 5, -6, 1, 4, 1], [5, -1, 4, 4, -6, -6, 1, 1, 1]],
        ];
    }
}
