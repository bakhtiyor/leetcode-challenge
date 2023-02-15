<?php

namespace App\Tests;

use App\AddToArrayFormOfInteger;
use PHPUnit\Framework\TestCase;

class AddToArrayFormOfIntegerTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testAddToArrayForm(array $expected, array $num, int $k): void
    {
        $addToArrayFormOfInteger = new AddToArrayFormOfInteger();
        $result = $addToArrayFormOfInteger->addToArrayForm($num, $k);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [[1,2,3,4], [1,2,0,0], 34],
            [[4,5,5], [2,7,4], 181],
            [[1,0,2,1], [2,1,5], 806],
        ];
    }
}
