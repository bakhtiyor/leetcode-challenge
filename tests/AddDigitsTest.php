<?php

namespace App\Tests;

use App\AddDigits;
use PHPUnit\Framework\TestCase;

class AddDigitsTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testAddDigits(int $number, int $expected): void
    {
        $addDigits = new AddDigits();
        $result  = $addDigits->addDigits($number);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [10, 1],
            [38, 2],
            [0, 0]
        ];
    }
}
