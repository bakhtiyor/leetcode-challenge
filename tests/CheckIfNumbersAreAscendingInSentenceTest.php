<?php

namespace App\Tests;

use App\CheckIfNumbersAreAscendingInSentence;
use PHPUnit\Framework\TestCase;

class CheckIfNumbersAreAscendingInSentenceTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     * @param string $str
     * @param bool $expected
     */
    public function testAreNumbersAscending(string $str, bool $expected): void
    {
        $sut = new CheckIfNumbersAreAscendingInSentence();
        $this->assertEquals($expected, $sut->areNumbersAscending($str));
    }

    public function dataProvider(): array
    {
        return [
            ['1 box has 3 blue 4 red 6 green and 12 yellow marbles', true],
            ['hello world 5 x 5', false],
            ['sunset is at 7 51 pm overnight lows will be in the low 50 and 60 s', false],
        ];
    }
}
