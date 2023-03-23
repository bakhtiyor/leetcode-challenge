<?php

namespace App\Tests;

use App\AlternatingDigitSum;
use PHPUnit\Framework\TestCase;

class AlternatingDigitSumTest extends TestCase
{
    /** @dataProvider dataProvider2 */
    public function testAlternateDigitSum(int $number, int $expected): void
    {
        $alternatingDigitSum = new AlternatingDigitSum();
        $this->assertEquals($expected, $alternatingDigitSum->alternateDigitSum($number));
    }

    public function dataProvider2(): array
    {
        return [
            [521, 4],
            [111, 1],
            [886996, 0]
        ];
    }
}
