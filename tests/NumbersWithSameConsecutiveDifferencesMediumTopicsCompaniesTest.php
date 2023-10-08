<?php

namespace App\Tests;

use App\NumbersWithSameConsecutiveDifferencesMediumTopicsCompanies;
use PHPUnit\Framework\TestCase;

class NumbersWithSameConsecutiveDifferencesMediumTopicsCompaniesTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testNumsSameConsecDiff(int $n, int $k): void
    {
        $obj = new NumbersWithSameConsecutiveDifferencesMediumTopicsCompanies();
        $this->assertIsArray($obj->numsSameConsecDiff($n, $k));
    }

    public function dataProvider(): array
    {
        return [
            [3, 7, [181,292,707,818,929]],
            [2, 1, [10,12,21,23,32,34,43,45,54,56,65,67,76,78,87,89,98]],
        ];
    }
}
