<?php

namespace App\Tests;

use App\ConvertToBase2;
use PHPUnit\Framework\TestCase;

class ConvertToBase2Test extends TestCase
{
    /** @dataProvider dataProvider */
    public function testBaseNeg2(int $num, string $expected): void
    {
        $convertToBase2 = new ConvertToBase2();
        $this->assertEquals($expected, $convertToBase2->baseNeg2($num));
    }

    public function dataProvider(): array
    {
        return [
            [
                'num' => 2,
                'expected' => '110',
            ],
            [
                'num' => 3,
                'expected' => '111',
            ],
            [
                'num' => 4,
                'expected' => '100',
            ],
        ];
    }
}
