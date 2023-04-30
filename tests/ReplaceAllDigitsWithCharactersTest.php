<?php

namespace App\Tests;

use App\ReplaceAllDigitsWithCharacters;
use PHPUnit\Framework\TestCase;

class ReplaceAllDigitsWithCharactersTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testReplaceDigits(string $str, string $expected): void
    {
        $obj = new ReplaceAllDigitsWithCharacters();
        $this->assertEquals($expected, $obj->replaceDigits($str));
    }

    public function dataProvider(): array
    {
        return [
            ['a1c1e1', 'abcdef'],
            ['a1b2c3d4e', 'abbdcfdhe'],
        ];
    }
}
