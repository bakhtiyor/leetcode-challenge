<?php

namespace App\Tests;

use App\MinimumCommonValue;
use PHPUnit\Framework\TestCase;

class MinimumCommonValueTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testGetCommon(array $nums1, array $nums2, int $expected): void
    {
        $minimumCommonValue = new MinimumCommonValue();
        $this->assertEquals($expected, $minimumCommonValue->getCommon($nums1, $nums2));
    }

    public function dataProvider(): array
    {
        return [
            [[1, 2, 3], [2, 4], 2],
            [[1, 2, 3, 6], [2, 3, 4, 5], 2],
        ];
    }
}
