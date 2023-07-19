<?php

namespace App\Tests;

use App\DetectPatternOfLengthMRepeatedKOrMoreTimes;
use PHPUnit\Framework\TestCase;

class DetectPatternOfLengthMRepeatedKOrMoreTimesTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testContainsPattern(array $arr, int $m, int $k, bool $expected): void
    {
        $sut = new DetectPatternOfLengthMRepeatedKOrMoreTimes();
        $this->assertEquals($expected, $sut->containsPattern($arr, $m, $k));
    }

    public function dataProvider(): array
    {
        return [
            [[1,2,4,4,4,4], 1, 3, true],
            [[1,2,1,2,1,1,1,3], 2, 2, true],
            [[1,2,1,2,1,3], 2, 3, false],
        ];
    }
}
