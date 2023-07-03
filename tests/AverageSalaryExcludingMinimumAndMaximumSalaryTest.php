<?php

namespace App\Tests;

use App\AverageSalaryExcludingMinimumAndMaximumSalary;
use PHPUnit\Framework\TestCase;

class AverageSalaryExcludingMinimumAndMaximumSalaryTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testAverage(array $salary, float $expected): void
    {
        $averageSalaryExcludingMinimumAndMaximumSalary = new AverageSalaryExcludingMinimumAndMaximumSalary();
        $this->assertEquals($expected, $averageSalaryExcludingMinimumAndMaximumSalary->average($salary));
    }

    public function dataProvider(): array
    {
        return [
            [[4000, 3000, 1000, 2000], 2500.00000],
            [[1000, 2000, 3000], 2000.00000],
            [[6000, 5000, 4000, 3000, 2000, 1000], 3500.00000],
            [[8000, 9000, 2000, 3000, 6000, 1000], 4750.00000],
        ];
    }
}
