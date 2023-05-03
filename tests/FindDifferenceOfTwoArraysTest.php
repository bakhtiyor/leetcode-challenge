<?php

namespace App\Tests;

use App\FindDifferenceOfTwoArrays;
use PHPUnit\Framework\TestCase;

class FindDifferenceOfTwoArraysTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testFindDifference(array $nums1, array $nums2, array $expected): void
    {
        $findDifferenceOfTwoArrays = new FindDifferenceOfTwoArrays();
        $this->assertEquals($expected, $findDifferenceOfTwoArrays->findDifference($nums1, $nums2));
    }

    public function dataProvider(): array
    {
        return [
            [
                [1, 2, 3],
                [2, 4, 6],
                [[1, 3], [4, 6]],
            ],
            [
                [1, 2, 3, 3],
                [1, 1, 2, 2],
                [[3], []],
            ],
        ];
    }
}
