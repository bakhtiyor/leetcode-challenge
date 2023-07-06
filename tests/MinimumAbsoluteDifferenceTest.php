<?php

namespace App\Tests;

use App\MinimumAbsoluteDifference;
use PHPUnit\Framework\TestCase;

class MinimumAbsoluteDifferenceTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testMinimumAbsDifference(array $arr, array $expected): void
    {
        $obj = new MinimumAbsoluteDifference();
        $result = $obj->minimumAbsDifference($arr);
        $this->assertEquals($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [[4,2,1,3], [[1,2],[2,3],[3,4]]],
            [[1,3,6,10,15], [[1,3]]],
            [[3,8,-10,23,19,-4,-14,27], [[-14,-10],[19,23],[23,27]]],
        ];
    }
}
