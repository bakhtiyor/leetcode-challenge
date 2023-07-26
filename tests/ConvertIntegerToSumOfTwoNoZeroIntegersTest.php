<?php

namespace App\Tests;

use App\ConvertIntegerToSumOfTwoNoZeroIntegers;
use PHPUnit\Framework\TestCase;

class ConvertIntegerToSumOfTwoNoZeroIntegersTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testGetNoZeroIntegers(int $n, array $expected): void
    {
        $convertIntegerToSumOfTwoNoZeroIntegers = new ConvertIntegerToSumOfTwoNoZeroIntegers();
        $this->assertEquals($expected, $convertIntegerToSumOfTwoNoZeroIntegers->getNoZeroIntegers($n));
    }

    public function dataProvider(): array
    {
        return [
            [2, [1, 1]],
            [11, [2, 9]],
        ];
    }
}
