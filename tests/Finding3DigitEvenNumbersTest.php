<?php

namespace App\Tests;

use App\Finding3DigitEvenNumbers;
use PHPUnit\Framework\TestCase;

class Finding3DigitEvenNumbersTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testFindEvenNumbers(array $digits, array $expected): void
    {
        $sut = new Finding3DigitEvenNumbers();
        $this->assertEquals($expected, $sut->findEvenNumbers($digits));
    }

    public function dataProvider(): array
    {
        return [
            [[2, 1, 3, 0], [102, 120, 130, 132, 210, 230, 302, 310, 312, 320]],
            [[2, 2, 8, 8, 2], [222, 228, 282, 288, 822, 828, 882]],
            [[3, 7, 5], []],
        ];
    }
}
