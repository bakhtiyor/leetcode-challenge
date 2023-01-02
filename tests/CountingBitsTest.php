<?php

namespace App\Tests;

use App\CountingBits;
use PHPUnit\Framework\TestCase;

class CountingBitsTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testCountBits(int $n, array $expected): void
    {
        $countingBits = new CountingBits();
        $result = $countingBits->countBits($n);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [5, [0,1,1,2,1,2]],
            [2, [0,1,1]]
        ];
    }
}
