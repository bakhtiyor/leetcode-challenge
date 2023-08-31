<?php

namespace App\Tests;

use App\XOROperationInArray;
use PHPUnit\Framework\TestCase;

class XOROperationInArrayTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testXorOperation(int $n, int $start, int $expected): void
    {
        $xorOperationInArray = new XOROperationInArray();
        $this->assertEquals($expected, $xorOperationInArray->xorOperation($n, $start));
    }

    public function dataProvider(): array
    {
        return [
            [5, 0, 8],
            [4, 3, 8],
        ];
    }
}
