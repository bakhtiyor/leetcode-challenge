<?php

namespace App\Tests;

use App\SelfDividingNumbers;
use PHPUnit\Framework\TestCase;

class SelfDividingNumbersTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testSelfDividingNumbers(int $left, int $right, array $expected): void
    {
        $selfDividingNumbers = new SelfDividingNumbers();
        $result = $selfDividingNumbers->selfDividingNumbers($left, $right);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [47, 85, [48,55,66,77]],
            [1, 22, [1,2,3,4,5,6,7,8,9,11,12,15,22]],
        ];
    }
}
