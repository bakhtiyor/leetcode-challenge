<?php

namespace App\Tests;

use App\MergeTwo2DArraysBySummingValues;
use PHPUnit\Framework\TestCase;

class MergeTwo2DArraysBySummingValuesTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testMergeArrays(array $nums1, array $nums2, array $expected): void
    {
        $mergeTwo2DArraysBySummingValues = new MergeTwo2DArraysBySummingValues();
        $this->assertEquals($expected, $mergeTwo2DArraysBySummingValues->mergeArrays($nums1, $nums2));
    }

    public function dataProvider(): array
    {
        return [
            [
                [[1, 2], [2, 3], [3, 4]],
                [[1, 5], [2, 7], [4, 3],],
                [[1, 7], [2, 10], [3, 4], [4, 3],],
            ],
            [
                [[1, 2], [2, 3], [3, 4],],
                [[1, 5], [2, 7], [4, 3],],
                [[1, 7], [2, 10], [3, 4], [4, 3],],
            ],
        ];
    }
}
