<?php

namespace App\Tests;

use App\NumberOfCommonFactors;
use PHPUnit\Framework\TestCase;

class NumberOfCommonFactorsTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testCommonFactors(int $a, int $b, int $expected): void
    {
        $numberOfCommonFactors = new NumberOfCommonFactors();
        $this->assertEquals($expected, $numberOfCommonFactors->commonFactors($a, $b));
    }

    public function dataProvider(): array
    {
        return [
            [12, 6, 4],
            [25, 30, 2],
        ];
    }
}
