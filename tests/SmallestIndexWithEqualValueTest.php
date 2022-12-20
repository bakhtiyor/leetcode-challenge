<?php

namespace App\Tests;

use App\SmallestIndexWithEqualValue;
use PHPUnit\Framework\TestCase;

class SmallestIndexWithEqualValueTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testSmallestEqual(array $nums, int $expected): void
    {
        $smallestIndexWithEqualValue = new SmallestIndexWithEqualValue();
        $result = $smallestIndexWithEqualValue->smallestEqual($nums);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [[4,3,2,1], 2],
            [[0,1,2], 0],
            [[1,2,3,4,5,6,7,8,9,0], -1]
        ];
    }
}
