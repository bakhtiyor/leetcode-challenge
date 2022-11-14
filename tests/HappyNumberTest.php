<?php

namespace App\Tests;

use App\HappyNumber;
use PHPUnit\Framework\TestCase;

class HappyNumberTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testIsHappy(int $number, bool $expected): void
    {
        $happyNumber = new HappyNumber();
        $result = $happyNumber->isHappy($number);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [19, true],
            [2, false]
        ];
    }
}
