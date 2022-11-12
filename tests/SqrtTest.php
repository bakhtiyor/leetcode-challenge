<?php

namespace App\Tests;

use App\Sqrt;
use PHPUnit\Framework\TestCase;

class SqrtTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testMySqrt(int $x, int $expected): void
    {
        $sqrt = new Sqrt();
        $result = $sqrt->mySqrt($x);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [4, 2],
            [8, 2]
        ];
    }
}
