<?php

namespace App\Tests;

use App\LongestSubsequenceWithLimitedSum;
use PHPUnit\Framework\TestCase;

class LongestSubsequenceWithLimitedSumTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testAnswerQueries(array $nums, array $queries, array $expected): void
    {
        $this->assertEquals($expected, (new LongestSubsequenceWithLimitedSum())->answerQueries($nums, $queries));
    }

    public function dataProvider(): array
    {
        return [
            [[4, 5, 2, 1], [3, 10, 21], [2, 3, 4]],
            [[2, 3, 4, 5], [1], [0]],
        ];
    }
}
