<?php

namespace App\Tests;

use App\FibonacciNumber;
use PHPUnit\Framework\TestCase;

class FibonacciNumberTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testFib(int $number, int $expected): void
    {
        $fibonacciNumber = new FibonacciNumber();
        $result = $fibonacciNumber->fib($number);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [2, 1],
            [3, 2],
            [4, 3]
        ];
    }
}
