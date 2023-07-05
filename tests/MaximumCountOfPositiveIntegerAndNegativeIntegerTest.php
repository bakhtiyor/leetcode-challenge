<?php

namespace App\Tests;

use App\MaximumCountOfPositiveIntegerAndNegativeInteger;
use PHPUnit\Framework\TestCase;

class MaximumCountOfPositiveIntegerAndNegativeIntegerTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testMaximumCount(array $nums, int $expected): void
    {
        $maximumCountOfPositiveIntegerAndNegativeInteger = new MaximumCountOfPositiveIntegerAndNegativeInteger();
        $this->assertEquals($expected, $maximumCountOfPositiveIntegerAndNegativeInteger->maximumCount($nums));
    }

    public function dataProvider(): array
    {
        return [
            [[-2, -1, -1, 1, 2, 3], 3],
            [[-3, -2, -1, 0, 0, 1, 2], 3],
            [[5, 20, 66, 1314], 4],
        ];
    }
}
