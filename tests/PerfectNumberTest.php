<?php

namespace App\Tests;

use App\PerfectNumber;
use PHPUnit\Framework\TestCase;

class PerfectNumberTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testCheckPerfectNumber(int $number, bool $expected): void
    {
        $perfectNumber = new PerfectNumber();
        $result = $perfectNumber->checkPerfectNumber($number);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [28, true],
            [99999991, false],
            [7, false]
        ];
    }
}
