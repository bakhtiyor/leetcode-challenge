<?php

namespace App\Tests;

use App\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testFizzBuzz(int $n, array $expected): void
    {
        $fizzBuzz = new FizzBuzz();
        $result = $fizzBuzz->fizzBuzz($n);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [3, ['1','2','Fizz']],
            [5, ['1','2','Fizz','4','Buzz']],
            [15, ['1','2','Fizz','4','Buzz','Fizz','7','8','Fizz','Buzz','11','Fizz','13','14','FizzBuzz']]
        ];
    }
}
