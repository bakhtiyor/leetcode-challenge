<?php

namespace App\Tests;

use App\PowerOfFour;
use PHPUnit\Framework\TestCase;

class PowerOfFourTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testIsPowerOfFour(int $n, bool $expected): void
    {
        $powerOfFour = new PowerOfFour();
        $result = $powerOfFour->isPowerOfFour($n);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [16, true],
            [5, false],
            [1, true],
        ];
    }

}
