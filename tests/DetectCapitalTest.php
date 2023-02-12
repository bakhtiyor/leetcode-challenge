<?php

namespace App\Tests;

use App\DetectCapital;
use PHPUnit\Framework\TestCase;

class DetectCapitalTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testDetectCapitalUse(string $word, bool $expected): void
    {
        $detectCapital = new DetectCapital();
        $result = $detectCapital->detectCapitalUse($word);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            ['USA', true],
            ['Dushanbe', true],
            ['moscow', true],
            ['FlaG', false]
        ];
    }
}
