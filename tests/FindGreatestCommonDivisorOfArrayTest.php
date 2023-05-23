<?php

namespace App\Tests;

use App\FindGreatestCommonDivisorOfArray;
use PHPUnit\Framework\TestCase;

class FindGreatestCommonDivisorOfArrayTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testFindGCD(array $nums, int $expected): void
    {
        $this->assertEquals($expected, (new FindGreatestCommonDivisorOfArray())->findGCD($nums));
    }

    public function dataProvider(): array
    {
        return [
            [[2,5,6,9,10], 2],
            [[7,5,6,8,3], 1],
            [[3,3], 3],
        ];
    }
}
