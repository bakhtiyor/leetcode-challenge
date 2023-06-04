<?php

namespace App\Tests;

use App\Convert1DArrayInto2DArray;
use PHPUnit\Framework\TestCase;

class Convert1DArrayInto2DArrayTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testConstruct2DArray(array $original, int $m, int $n, array $expected): void
    {
        $obj = new Convert1DArrayInto2DArray();
        $result = $obj->construct2DArray($original, $m, $n);

        $this->assertEquals($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [[1,2,3,4], 2, 2, [[1,2],[3,4]]],
            [[1,2,3], 1, 3, [[1,2,3]]],
            [[1,2], 1, 1, []]
        ];
    }
}
