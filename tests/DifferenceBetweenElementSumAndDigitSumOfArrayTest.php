<?php

namespace App\Tests;

use App\DifferenceBetweenElementSumAndDigitSumOfArray;
use PHPUnit\Framework\TestCase;

class DifferenceBetweenElementSumAndDigitSumOfArrayTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testDifferenceOfSum(array $nums, int $expected): void
    {
        $differenceBetweenElementSumAndDigitSumOfArray = new DifferenceBetweenElementSumAndDigitSumOfArray();
        $this->assertEquals($expected, $differenceBetweenElementSumAndDigitSumOfArray->differenceOfSum($nums));
    }

    public function dataProvider(): array
    {
        return [
            [[1,15,6,3], 9],
            [[1,2,3,4], 0],
        ];
    }
}
