<?php

namespace App\Tests;

use App\LongPressedName;
use PHPUnit\Framework\TestCase;

class LongPressedNameTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testIsLongPressedName(string $name, string $typed, bool $expected): void
    {
        $longPressedName = new LongPressedName();
        $result = $longPressedName->isLongPressedName($name, $typed);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            ['saeed', 'ssaaedd', false],
            ['alex', 'aaleex', true],
        ];
    }
}
