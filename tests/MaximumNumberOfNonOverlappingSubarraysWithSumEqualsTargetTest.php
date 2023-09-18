<?php

namespace App\Tests;

use App\MaximumNumberOfNonOverlappingSubarraysWithSumEqualsTarget;
use PHPUnit\Framework\TestCase;

class MaximumNumberOfNonOverlappingSubarraysWithSumEqualsTargetTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testMaxNonOverlapping(array $nums, int $target, int $expected): void
    {
        $result = (new MaximumNumberOfNonOverlappingSubarraysWithSumEqualsTarget())->maxNonOverlapping($nums, $target);
        self::assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [[1, 1, 1, 1, 1], 2, 2],
            [[-1, 3, 5, 1, 4, 2, -9], 6, 2]
        ];
    }
}
