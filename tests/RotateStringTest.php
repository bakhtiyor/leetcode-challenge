<?php

namespace App\Tests;

use App\RotateString;
use PHPUnit\Framework\TestCase;

class RotateStringTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testRotateString(string $str, string $goal, bool $expected): void
    {
        $rotateString = new RotateString();
        $result = $rotateString->rotateString($str, $goal);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            ['abcde', 'cdeab', true],
            ['abcde', 'abced', false],
        ];
    }
}
