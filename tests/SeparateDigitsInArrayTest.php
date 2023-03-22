<?php

namespace App\Tests;

use App\SeparateDigitsInArray;
use PHPUnit\Framework\TestCase;

class SeparateDigitsInArrayTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testSeparateDigits(array $nums, array $expected): void
    {
        $separateDigitsInArray = new SeparateDigitsInArray();
        $this->assertEquals($expected, $separateDigitsInArray->separateDigits($nums));
    }

    public function dataProvider(): array
    {
        return [
            [[13,25,83,77], [1,3,2,5,8,3,7,7]],
            [[7,1,3,9], [7,1,3,9]],
        ];
    }
}
