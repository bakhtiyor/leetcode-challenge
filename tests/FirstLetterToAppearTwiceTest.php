<?php

namespace App\Tests;

use App\FirstLetterToAppearTwice;
use PHPUnit\Framework\TestCase;

class FirstLetterToAppearTwiceTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testRepeatedCharacter(string $str, string $expected): void
    {
        $firstLetterToAppearTwice = new FirstLetterToAppearTwice();
        $this->assertEquals($expected, $firstLetterToAppearTwice->repeatedCharacter($str));
    }

    public function dataProvider(): array
    {
        return [
            ['abccbaacz', 'c'],
            ['abcdd', 'd'],
        ];
    }
}
