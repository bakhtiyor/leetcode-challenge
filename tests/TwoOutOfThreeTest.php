<?php

namespace App\Tests;

use App\TwoOutOfThree;
use PHPUnit\Framework\TestCase;

class TwoOutOfThreeTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testTwoOutOfThree(array $nums1, array $nums2, array $nums3, array $expected): void
    {
        $sut = new TwoOutOfThree();
        $this->assertEquals($expected, $sut->twoOutOfThree($nums1, $nums2, $nums3));
    }

    public function dataProvider(): array
    {
        return [
            [[1, 1, 3, 2], [2, 3], [3], [3, 2]],
            [[3, 1], [2, 3], [1, 2], [3, 1, 2]],
            [[1, 2, 2], [4, 3, 3], [5], []],
        ];
    }
}
