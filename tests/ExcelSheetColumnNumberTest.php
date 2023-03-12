<?php

namespace App\Tests;

use App\ExcelSheetColumnNumber;
use PHPUnit\Framework\TestCase;

class ExcelSheetColumnNumberTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testTitleToNumber(string $columnTitle, int $expected): void
    {
        $excelSheetColumnNumber = new ExcelSheetColumnNumber();
        $result = $excelSheetColumnNumber->titleToNumber($columnTitle);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            ['FXSHRXW', 2147483647],
            ['A', 1],
            ['AB', 28],
            ['ZY', 701],
            ['BCM', 1443],
            ['EF', 136]
        ];
    }
}
