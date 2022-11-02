<?php

namespace App\Tests;

use App\PowerXN;
use PHPUnit\Framework\TestCase;

class PowerXNTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testMyPow(float $x, int $n, float $expected): void
    {
        $powerXN = new PowerXN();
        $result = $powerXN->myPow($x, $n);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [2.00, 10, 1024.00],
            [2, 5, 32],
            [0.44894, -5, 54.83508],
            [34.00515, -3, 3e-05],
            [8.88023, 3, 700.28148],
            [2.00, -2, 0.2500],
            [2.10, 3, 9.2610],
        ];
    }
}
