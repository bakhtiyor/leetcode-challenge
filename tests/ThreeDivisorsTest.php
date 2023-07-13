<?php

namespace App\Tests;

use App\ThreeDivisors;
use PHPUnit\Framework\TestCase;

class ThreeDivisorsTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testIsThree(int $number, bool $expected): void
    {
        $threeDivisors = new ThreeDivisors();
        $this->assertEquals($expected, $threeDivisors->isThree($number));
    }

    public function dataProvider(): array
    {
        return [
            [2, false],
            [4, true],
        ];
    }
}
