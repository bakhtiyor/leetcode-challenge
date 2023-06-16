<?php

namespace App\Tests;

use App\FindLuckyIntegerInArray;
use PHPUnit\Framework\TestCase;

class FindLuckyIntegerInArrayTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testFindLucky(array $arr, int $expected): void
    {
        $sut = new FindLuckyIntegerInArray();
        $this->assertEquals($expected, $sut->findLucky($arr));
    }

    public function dataProvider(): array
    {
        return [
            [[2, 2, 3, 4], 2],
            [[1, 2, 2, 3, 3, 3], 3],
            [[2, 2, 2, 3, 3], -1],
        ];
    }
}
