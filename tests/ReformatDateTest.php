<?php

namespace App\Tests;

use App\ReformatDate;
use PHPUnit\Framework\TestCase;

class ReformatDateTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testReformatDate(string $date, string $expected): void
    {
        $reformatDate = new ReformatDate();
        $this->assertSame($expected, $reformatDate->reformatDate($date));
    }

    public function dataProvider(): array
    {
        return [
            ['20th Oct 2052', '2052-10-20'],
            ['6th Jun 1933', '1933-06-06'],
            ['26th May 1960', '1960-05-26']
        ];
    }
}
