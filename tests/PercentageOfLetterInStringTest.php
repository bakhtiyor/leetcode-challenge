<?php

namespace App\Tests;

use App\PercentageOfLetterInString;
use PHPUnit\Framework\TestCase;

class PercentageOfLetterInStringTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testPercentageLetter(string $str, string $letter, int $expected): void
    {
        $this->assertEquals($expected, (new PercentageOfLetterInString())->percentageLetter($str, $letter));
    }

    public function dataProvider(): array
    {
        return [
            ['foobar', 'o', 33],
            ['jjjj', 'k', 0],
        ];
    }
}
