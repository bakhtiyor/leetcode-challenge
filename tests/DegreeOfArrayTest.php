<?php

namespace App\Tests;

use App\DegreeOfArray;
use PHPUnit\Framework\TestCase;

class DegreeOfArrayTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testFindShortestSubArray(array $nums, int $expected): void
    {
        $sut = new DegreeOfArray();
        $this->assertEquals($expected, $sut->findShortestSubArray($nums));
    }

    public function dataProvider(): array
    {
        return [
            [[1, 2, 2, 3, 1], 2],
            [[1, 2, 2, 3, 1, 4, 2], 6],
        ];
    }
}
