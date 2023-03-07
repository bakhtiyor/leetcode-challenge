<?php

namespace App\Tests;

use App\ConvertNumberToHexadecimal;
use PHPUnit\Framework\TestCase;

class ConvertNumberToHexadecimalTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testToHex(string $expected, int $number): void
    {
        $convertNumberToHexadecimal = new ConvertNumberToHexadecimal();
        $result = $convertNumberToHexadecimal->toHex($number);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            ['fffffffe', -2],
            ['0', 0],
            ['1e2', 482],
            ['1a', 26],
            ['ffffffff', -1],
        ];
    }
}
