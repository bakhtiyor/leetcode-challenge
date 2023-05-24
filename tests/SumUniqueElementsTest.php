<?php

namespace App\Tests;

use App\SumUniqueElements;
use PHPUnit\Framework\TestCase;

class SumUniqueElementsTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testSumOfUnique(array $nums, int $expected): void
    {
        $sumUniqueElements = new SumUniqueElements();
        $this->assertEquals($expected, $sumUniqueElements->sumOfUnique($nums));
    }

    public function dataProvider(): array
    {
        return [
            [[1,2,3,2], 4],
            [[1,1,1,1,1], 0],
            [[1,2,3,4,5], 15],
        ];
    }
}
