<?php

namespace App\Tests;

use App\DecodeXORedArray;
use PHPUnit\Framework\TestCase;

class DecodeXORedArrayTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testDecode(array $encoded, int $first, array $expected): void
    {
        $obj = new DecodeXORedArray();
        $result = $obj->decode($encoded, $first);

        $this->assertEquals($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [[1,2,3], 1, [1,0,2,1]],
            [[6,2,7,3], 4, [4,2,0,7,4]]
        ];
    }
}
