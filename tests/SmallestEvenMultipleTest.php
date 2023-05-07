<?php

namespace App\Tests;

use App\SmallestEvenMultiple;
use PHPUnit\Framework\TestCase;

class SmallestEvenMultipleTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testSmallestEvenMultiple(int $n, int $expected): void
    {
        $obj = new SmallestEvenMultiple();
        $result = $obj->smallestEvenMultiple($n);
        $this->assertEquals($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [5, 10],
            [6, 6]
        ];
    }
}
