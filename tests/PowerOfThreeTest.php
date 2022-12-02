<?php

namespace App\Tests;

use App\PowerOfThree;
use PHPUnit\Framework\TestCase;

class PowerOfThreeTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testIsPowerOfThree(int $number, bool $expected): void
    {
        $powerOfThree = new PowerOfThree();
        $result = $powerOfThree->isPowerOfThree($number);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [45, false],
            [3, true],
            [1, true],
            [9, true],
            [27, true],
            [0, false],
            [-1, false]
        ];
    }
}
