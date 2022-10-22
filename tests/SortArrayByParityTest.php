<?php

namespace App\Tests;

use App\SortArrayByParity;
use PHPUnit\Framework\TestCase;

class SortArrayByParityTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testSortArrayByParity(array $nums, array $expected): void
    {
        $sortArrayByParity = new SortArrayByParity();
        $result = $sortArrayByParity->sortArrayByParity($nums);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [[3,1,2,4], [2,4,3,1]],
            [[0], [0]]
        ];
    }
}
