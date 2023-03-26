<?php

namespace App\Tests;

use App\LeftAndRightSumDifferences;
use PHPUnit\Framework\TestCase;

class LeftAndRightSumDifferencesTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testLeftRightDifference(array $nums, array $expected): void
    {
        $sut = new LeftAndRightSumDifferences();
        $this->assertSame($expected, $sut->leftRightDifference($nums));
    }

    public function dataProvider(): array
    {
        return [
            [[10, 4, 8, 3], [15, 1, 11, 22]],
            [[1], [0]],
        ];
    }
}
