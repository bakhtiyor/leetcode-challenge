<?php

namespace App\Tests;

use App\GreatestEnglishLetterInUpperAndLowerCase;
use PHPUnit\Framework\TestCase;

class GreatestEnglishLetterInUpperAndLowerCaseTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testGreatestLetter(string $str, string $expected): void
    {
        $sut = new GreatestEnglishLetterInUpperAndLowerCase();
        $this->assertEquals($expected, $sut->greatestLetter($str));
    }

    public function dataProvider(): array
    {
        return [
            ['lEeTcOdE', 'E'],
            ['arRAzFif', 'R'],
            ['AbCdEfGhIjK', ''],
        ];
    }
}
