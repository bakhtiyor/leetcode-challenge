<?php

namespace App\Tests;

use App\FrequencyOfTheMostFrequentElement;
use PHPUnit\Framework\TestCase;

class FrequencyOfTheMostFrequentElementTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testMaxFrequency(array $nums, int $k, int $expected): void
    {
        $obj = new FrequencyOfTheMostFrequentElement();
        $this->assertEquals($expected, $obj->maxFrequency($nums, $k));
    }

    public function dataProvider(): array
    {
        return [
            [[1, 2, 4], 5, 3],
            [[1, 4, 8, 13], 5, 2],
            [[3, 9, 6], 2, 1]
        ];
    }
}
