<?php

namespace App\Tests;

use App\DivideArrayIntoEqualPairs;
use PHPUnit\Framework\TestCase;

class DivideArrayIntoEqualPairsTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testDivideArray(array $nums, bool $expected): void
    {
        $divideArrayIntoEqualPairs = new DivideArrayIntoEqualPairs();
        $this->assertEquals($expected, $divideArrayIntoEqualPairs->divideArray($nums));
    }

    public function dataProvider(): array
    {
        return [
            [[3,2,3,2,2,2], true],
            [[1,2,3,4], false],
        ];
    }
}
