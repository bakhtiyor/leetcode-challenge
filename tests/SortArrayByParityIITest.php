<?php

namespace App\Tests;

use App\SortArrayByParityII;
use PHPUnit\Framework\TestCase;

class SortArrayByParityIITest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testSortArrayByParityII(array $nums, array $expected): void
    {
        $sortArrayByParityII = new SortArrayByParityII();
        $this->assertEquals($expected, $sortArrayByParityII->sortArrayByParityII($nums));
    }

    public function dataProvider(): array
    {
        return [
            [[4, 2, 5, 7], [4, 5, 2, 7]],
            [[2, 3], [2, 3]],
        ];
    }
}
