<?php

namespace App\Tests;

use App\FindPivotInteger;
use PHPUnit\Framework\TestCase;

class FindPivotIntegerTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testPivotInteger(int $n, int $expected): void
    {
        $findPivotInteger = new FindPivotInteger();
        $this->assertEquals($expected, $findPivotInteger->pivotInteger($n));
    }

    public function dataProvider()
    {
        return [
            [8, 6],
            [1, 1],
            [4, -1],
        ];
    }
}
