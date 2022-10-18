<?php

namespace App\Tests;

use App\ValidMountainArray;
use PHPUnit\Framework\TestCase;

class ValidMountainArrayTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testValidMountainArray(array $arr, bool $expected): void
    {
        $validMountainArray = new ValidMountainArray();
        $result = $validMountainArray->validMountainArray($arr);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [[3,5,5], false],
            [[4,4,3,2,1], false],
            [[1,3,2], true],
            [[2,0,2], false],
            [[0,3,2,1], true],
            [[2,1], false]
        ];
    }
}
