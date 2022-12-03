<?php

namespace App\Tests;

use App\TwoArrayIntersection;
use PHPUnit\Framework\TestCase;

class TwoArrayIntersectionTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testIntersection(array $nums1, array $nums2, array $expected): void
    {
        $twoArrayIntersection = new TwoArrayIntersection();
        $result = $twoArrayIntersection->intersection($nums1, $nums2);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [[1,2,2,1], [2,2], [2]],
            [[4,9,5], [9,4,9,8,4], [4,9]]
        ];
    }
}
