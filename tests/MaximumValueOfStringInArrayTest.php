<?php

namespace App\Tests;

use App\MaximumValueOfStringInArray;
use PHPUnit\Framework\TestCase;

class MaximumValueOfStringInArrayTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testMaximumValue(array $strs, int $expected): void
    {
        $maximumValueOfStringInArray = new MaximumValueOfStringInArray();
        $this->assertEquals($expected, $maximumValueOfStringInArray->maximumValue($strs));
    }

    public function dataProvider(): array
    {
        return [
            [
                ['alic3', 'bob', '3', '4', '00000'], 5,
            ],
            [
                ['1', '01', '001', '0001'], 1,
            ],
        ];
    }
}
