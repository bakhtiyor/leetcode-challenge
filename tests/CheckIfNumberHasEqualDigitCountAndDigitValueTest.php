<?php

namespace App\Tests;

use App\CheckIfNumberHasEqualDigitCountAndDigitValue;
use PHPUnit\Framework\TestCase;

class CheckIfNumberHasEqualDigitCountAndDigitValueTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testDigitCount(string $num, bool $expected): void
    {
        $obj = new CheckIfNumberHasEqualDigitCountAndDigitValue();
        $this->assertSame($expected, $obj->digitCount($num));
    }

    public function dataProvider(): array
    {
        return [
            ['1210', true],
            ['030', false]
        ];
    }
}
