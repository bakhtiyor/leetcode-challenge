<?php

namespace App\Tests;

use App\StudentAttendanceRecord;
use PHPUnit\Framework\TestCase;

class StudentAttendanceRecordTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testCheckRecord(bool $expected, string $records): void
    {
        $studentAttendanceRecord = new StudentAttendanceRecord();
        $result = $studentAttendanceRecord->checkRecord($records);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [false, 'PLPPPLLLPLPPPPLPPPPPLPLPLLLPLP'],
            [false, 'LLLALL'],
            [false, 'PLLPLLLLPP'],
            [true, 'PPALLPLLPL'],
            [true, 'PPALLP'],
            [false, 'PPALLL'],
        ];
    }
}
