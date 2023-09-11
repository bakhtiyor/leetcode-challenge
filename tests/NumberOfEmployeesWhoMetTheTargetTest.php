<?php

namespace App\Tests;

use App\NumberOfEmployeesWhoMetTheTarget;
use PHPUnit\Framework\TestCase;

class NumberOfEmployeesWhoMetTheTargetTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testNumberOfEmployeesWhoMetTarget(array $hours, int $target, int $expected): void
    {
        $sut = new NumberOfEmployeesWhoMetTheTarget();
        $this->assertEquals($expected, $sut->numberOfEmployeesWhoMetTarget($hours, $target));
    }

    public function dataProvider(): array
    {
        return [
            [[0, 1, 2, 3, 4], 2, 3],
            [[5, 1, 4, 2, 2], 6, 0],
        ];
    }
}
