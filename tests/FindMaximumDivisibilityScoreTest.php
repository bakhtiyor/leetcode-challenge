<?php

namespace App\Tests;

use App\FindMaximumDivisibilityScore;
use PHPUnit\Framework\TestCase;

class FindMaximumDivisibilityScoreTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testMaxDivScore(array $nums, array $divisors, int $expected): void
    {
        $this->assertEquals($expected, (new FindMaximumDivisibilityScore())->maxDivScore($nums, $divisors));
    }

    public function dataProvider(): array
    {
        return [
            [[4,7,9,3,9], [5,2,3], 3],
            [[20,14,21,10], [5,7,5], 5],
            [[12], [10,16], 10],
        ];
    }
}
