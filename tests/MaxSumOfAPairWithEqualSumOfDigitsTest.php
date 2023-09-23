<?php

namespace App\Tests;

use App\MaxSumOfAPairWithEqualSumOfDigits;
use PHPUnit\Framework\TestCase;

class MaxSumOfAPairWithEqualSumOfDigitsTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testMaximumSum(array $nums, int $expected): void
    {
        $this->assertEquals($expected, (new MaxSumOfAPairWithEqualSumOfDigits())->maximumSum($nums));
    }

    public function dataProvider(): array
    {
        return [
            [[229,398,269,317,420,464,491,218,439,153,482,169,411,93,147,50,347,210,251,366,401], 973],
            [[279,169,463,252,94,455,423,315,288,64,494,337,409,283,283,477,248,8,89,166,188,186,128], 872],
            [[18,43,36,13,7], 54],
            [[10,12,19,14], -1]
        ];
    }
}
