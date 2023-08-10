<?php

namespace App\Tests;

use App\FormSmallestNumberFromTwoDigitArrays;
use PHPUnit\Framework\TestCase;

class FormSmallestNumberFromTwoDigitArraysTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testMinNumber(array $nums1, array $nums2, int $expected): void
    {
        $formSmallestNumberFromTwoDigitArrays = new FormSmallestNumberFromTwoDigitArrays();
        $this->assertEquals($expected, $formSmallestNumberFromTwoDigitArrays->minNumber($nums1, $nums2));
    }

    public function dataProvider(): array
    {
        return [
            [[4, 1, 3], [5, 7], 15],
            [[3, 5, 2, 6], [3, 1, 7], 3]
        ];
    }
}
