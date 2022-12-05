<?php

namespace App\Tests;

use App\ValidPerfectSquare;
use PHPUnit\Framework\TestCase;

class ValidPerfectSquareTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testIsPerfectSquare(int $number, bool $expected): void
    {
        $validPerfectSquare = new ValidPerfectSquare();
        $result = $validPerfectSquare->isPerfectSquare($number);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [16, true],
            [14, false]
        ];
    }
}
