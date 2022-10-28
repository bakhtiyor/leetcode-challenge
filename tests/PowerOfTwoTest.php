<?php

namespace App\Tests;

use App\PowerOfTwo;
use PHPUnit\Framework\TestCase;

class PowerOfTwoTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testIsPowerOfTwo(int $number, bool $expected): void
    {
        $powerOfTwo = new PowerOfTwo();
        $result = $powerOfTwo->isPowerOfTwo($number);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [1, true],
            [16, true],
            [3, false]
        ];
    }

}
