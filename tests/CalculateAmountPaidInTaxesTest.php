<?php

namespace App\Tests;

use App\CalculateAmountPaidInTaxes;
use PHPUnit\Framework\TestCase;

class CalculateAmountPaidInTaxesTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testCalculateTax(array $brackets, int $income, float $expected): void
    {
        $calculateAmountPaidInTaxes = new CalculateAmountPaidInTaxes();
        $this->assertEquals($expected, $calculateAmountPaidInTaxes->calculateTax($brackets, $income));
    }

    public function dataProvider(): array
    {
        return [
            [[[3,50],[7,10],[12,25]], 10, 2.65000],
            [[[1,0],[4,25],[5,50]], 2, 0.25000],
            [[[2,50]], 0, 0.00000]
        ];
    }
}
