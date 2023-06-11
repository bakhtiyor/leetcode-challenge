<?php

namespace App\Tests;

use App\ReformatPhoneNumber;
use PHPUnit\Framework\TestCase;

class ReformatPhoneNumberTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testReformatNumber(string $number, string $expected): void
    {
        $sut = new ReformatPhoneNumber();
        $this->assertEquals($expected, $sut->reformatNumber($number));
    }

    public function dataProvider(): array
    {
        return [
            ['1-23-45 6', '123-456'],
            ['123 4-567', '123-45-67'],
            ['123 4-5678', '123-456-78'],
            ['12', '12'],
            ['--17-5 229 35-39475 ', '175-229-353-94-75'],
        ];
    }
}
