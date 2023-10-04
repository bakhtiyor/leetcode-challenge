<?php

namespace App\Tests;

use App\StepsToMakeArrayNonDecreasing;
use PHPUnit\Framework\TestCase;

class StepsToMakeArrayNonDecreasingTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testTotalSteps(array $nums, int $expected): void
    {
        $stepsToMakeArrayNonDecreasing = new StepsToMakeArrayNonDecreasing();
        $this->assertEquals($expected, $stepsToMakeArrayNonDecreasing->totalSteps($nums));
    }

    public function dataProvider(): array
    {
        return [
            [
                'nums' => [5, 3, 4, 4, 7, 3, 6, 11, 8, 5, 11],
                'expected' => 3,
            ],
            [
                'nums' => [4, 5, 7, 7, 13],
                'expected' => 0,
            ],
        ];
    }
}
