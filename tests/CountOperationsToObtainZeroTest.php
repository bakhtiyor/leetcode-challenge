<?php

namespace App\Tests;

use App\CountOperationsToObtainZero;
use PHPUnit\Framework\TestCase;

class CountOperationsToObtainZeroTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testCountOperations(int $num1, int $num2, int $expected): void
    {
        $sut = new CountOperationsToObtainZero();
        $this->assertEquals($expected, $sut->countOperations($num1, $num2));
    }

    public function dataProvider(): array
    {
        return [
            [2, 3, 3],
            [10, 10, 1]
        ];
    }
}
