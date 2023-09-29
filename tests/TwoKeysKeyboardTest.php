<?php

namespace App\Tests;

use App\TwoKeysKeyboard;
use PHPUnit\Framework\TestCase;

class TwoKeysKeyboardTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testMinSteps(int $num, int $expected): void
    {
        $obj = new TwoKeysKeyboard();
        $this->assertEquals($expected, $obj->minSteps($num));
    }

    public function dataProvider(): array
    {
        return [
            [3, 3],
            [1, 0]
        ];
    }
}
