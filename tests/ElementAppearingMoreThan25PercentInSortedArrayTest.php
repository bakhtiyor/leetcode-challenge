<?php

namespace App\Tests;

use App\ElementAppearingMoreThan25PercentInSortedArray;
use PHPUnit\Framework\TestCase;

class ElementAppearingMoreThan25PercentInSortedArrayTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testFindSpecialInteger(array $arr, int $expected): void
    {
        $sut = new ElementAppearingMoreThan25PercentInSortedArray();
        $this->assertEquals($expected, $sut->findSpecialInteger($arr));
    }

    public function dataProvider(): array
    {
        return [
            [[1, 2, 2, 6, 6, 6, 6, 7, 10], 6],
            [[1, 1], 1],
        ];
    }
}
