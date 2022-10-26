<?php

namespace App\Tests;

use App\ThirdMaximumNumber;
use PHPUnit\Framework\TestCase;

class ThirdMaximumNumberTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testThirdMax(array $nums, int $expected): void
    {
        $thirdMaximumNumber = new ThirdMaximumNumber();
        $result = $thirdMaximumNumber->thirdMax($nums);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [[30,14,5,26,7,73,23,20], 26],
            [[3,2,1], 1],
            [[1,2], 2],
            [[2,2,3,1], 1]
        ];
    }
}
