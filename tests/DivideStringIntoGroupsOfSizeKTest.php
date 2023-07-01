<?php

namespace App\Tests;

use App\DivideStringIntoGroupsOfSizeK;
use PHPUnit\Framework\TestCase;

class DivideStringIntoGroupsOfSizeKTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testDivideString(string $str, int $k, string $fill, array $expected): void
    {
        $sut = new DivideStringIntoGroupsOfSizeK();
        $this->assertEquals($expected, $sut->divideString($str, $k, $fill));
    }

    public function dataProvider(): array
    {
        return [
            [
                'str' => 'abcdefghi',
                'k' => 3,
                'fill' => 'x',
                'expected' => ['abc', 'def', 'ghi'],
            ],
            [
                'str' => 'abcdefghij',
                'k' => 3,
                'fill' => 'x',
                'expected' => ['abc', 'def', 'ghi', 'jxx'],
            ],
        ];
    }
}
