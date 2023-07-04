<?php

namespace App\Tests;

use App\MinimumSumOfFourDigitNumberAfterSplittingDigits;
use PHPUnit\Framework\TestCase;

class MinimumSumOfFourDigitNumberAfterSplittingDigitsTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testMinimumSum(int $num, int $expected): void
    {
        $minimumSumOfFourDigitNumberAfterSplittingDigits = new MinimumSumOfFourDigitNumberAfterSplittingDigits();
        $this->assertEquals($expected, $minimumSumOfFourDigitNumberAfterSplittingDigits->minimumSum($num));
    }

    public function dataProvider(): array
    {
        return [
            [2932, 52],
            [4009, 13],
        ];
    }
}
