<?php

namespace App\Tests;

use App\SecondLargestDigitInString;
use PHPUnit\Framework\TestCase;

class SecondLargestDigitInStringTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testSecondHighest(string $str, int $expected): void
    {
        $this->assertEquals($expected, (new SecondLargestDigitInString())->secondHighest($str));
    }

    public function dataProvider(): array
    {
        return [
            ['dfa12321afd', 2],
            ['abc1111', -1],
            ['abc', -1],
        ];
    }
}
