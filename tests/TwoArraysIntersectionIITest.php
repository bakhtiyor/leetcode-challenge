<?php

namespace App\Tests;

use App\TwoArraysIntersectionII;
use PHPUnit\Framework\TestCase;

class TwoArraysIntersectionIITest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testIntersect(array $nums1, array $nums2, array $expected): void
    {
        $twoArraysIntersection = new TwoArraysIntersectionII();
        $result = $twoArraysIntersection->intersect($nums1, $nums2);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [[1,2,2,1], [2,2], [2,2]],
            [[4,9,5], [9,4,9,8,4], [4,9]]
        ];
    }
}
