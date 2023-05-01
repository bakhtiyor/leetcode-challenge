<?php

namespace App\Tests;

use App\AverageValueOfEvenNumbersThatAreDivisibleByThree;
use PHPUnit\Framework\TestCase;

class AverageValueOfEvenNumbersThatAreDivisibleByThreeTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testAverageValue(array $nums, int $expected): void
    {
        $obj = new AverageValueOfEvenNumbersThatAreDivisibleByThree();
        $this->assertEquals($expected, $obj->averageValue($nums));
    }

    public function dataProvider(): array
    {
        return [
            [[1,3,6,10,12,15], 9],
            [[1,2,4,7,10], 0],
        ];
    }
}
