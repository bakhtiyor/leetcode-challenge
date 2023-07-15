<?php

namespace App\Tests;

use App\LargestNumberAtLeastTwiceOfOthers;
use PHPUnit\Framework\TestCase;

class LargestNumberAtLeastTwiceOfOthersTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testDominantIndex(array $nums, int $expected): void
    {
        $this->assertEquals($expected, (new LargestNumberAtLeastTwiceOfOthers())->dominantIndex($nums));
    }

    public function dataProvider(): array
    {
        return [
            [[3,6,1,0], 1],
            [[1,2,3,4], -1],
        ];
    }
}
