<?php

namespace App\Tests;

use App\MergeSortedArray;
use PHPUnit\Framework\TestCase;

class MergeSortedArrayTest extends TestCase
{
    /** @dataProvider mergeDataProvider */
    public function testMerge(array $nums1, int $m, array $nums2, int $n, array $expected): void
    {
        $mergeSortedArray = new MergeSortedArray();
        $mergeSortedArray->merge($nums1, $m, $nums2, $n);

        $this->assertSame($nums1, $expected);
    }

    public function mergeDataProvider(): array
    {
        return [
            [
                [1,2,3,0,0,0],
                3,
                [2,5,6],
                3,
                [1,2,2,3,5,6]
            ],
            [
                [1], 1, [], 0, [1]
            ],
            [
                [0], 0, [1], 1, [1]
            ]
        ];
    }
}
