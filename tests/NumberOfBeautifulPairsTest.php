<?php

namespace App\Tests;

use App\LargestOddNumberInString;
use App\NumberOfBeautifulPairs;
use PHPUnit\Framework\TestCase;

class NumberOfBeautifulPairsTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function test(array $nums, int $expected): void
    {
        $numberOfBeautifulPairs = new NumberOfBeautifulPairs();
        $this->assertEquals($expected, $numberOfBeautifulPairs->countBeautifulPairs($nums));
    }

    public function dataProvider(): array
    {
        return [
            [[2, 5, 1, 4], 5],
            [[11, 21, 12], 2],
            [[31,25,72,79,74], 7]
        ];
    }
}
