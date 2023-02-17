<?php

namespace App\Tests;

use App\ExcelSheetColumnTitle;
use PHPUnit\Framework\TestCase;

class ExcelSheetColumnTitleTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testConvertToTitle(string $expected, int $columnNumber): void
    {
        $excelSheetColumnTitle = new ExcelSheetColumnTitle();
        $result = $excelSheetColumnTitle->convertToTitle($columnNumber);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            ['AZ', 52],
            ['FXSHRXW', 2147483647],
            ['ZY', 701],
            ['A', 1],
            ['AB', 28],
        ];
    }
}
