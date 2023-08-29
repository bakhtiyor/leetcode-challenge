<?php

namespace App\Tests;

use App\DetermineIfStringHalvesAreAlike;
use PHPUnit\Framework\TestCase;

class DetermineIfStringHalvesAreAlikeTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testHalvesAreAlike(string $str, bool $expected): void
    {
        $determineIfStringHalvesAreAlike = new DetermineIfStringHalvesAreAlike();
        $this->assertEquals($expected, $determineIfStringHalvesAreAlike->halvesAreAlike($str));
    }

    public function dataProvider(): array
    {
        return [
            ['book', true],
            ['textbook', false],
            ['MerryChristmas', false],
            ['AbCdEfGh', true],
        ];
    }
}
