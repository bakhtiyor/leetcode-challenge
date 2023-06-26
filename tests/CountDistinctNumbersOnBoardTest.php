<?php

namespace App\Tests;

use App\CountDistinctNumbersOnBoard;
use PHPUnit\Framework\TestCase;

class CountDistinctNumbersOnBoardTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testDistinctIntegers(int $number, int $expected): void
    {
        $this->assertEquals($expected, (new CountDistinctNumbersOnBoard())->distinctIntegers($number));
    }

    public function dataProvider(): array
    {
        return [
            [5, 4],
            [3, 2]
        ];
    }
}
