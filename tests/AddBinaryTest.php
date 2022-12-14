<?php

namespace App\Tests;

use App\AddBinary;
use PHPUnit\Framework\TestCase;

class AddBinaryTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testAddBinary(string $a, string $b, string $expected): void
    {
        $addBinary = new AddBinary();
        $result = $addBinary->addBinary($a, $b);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            ['11', '1', '100'],
            ['1010', '1011', '10101']
        ];
    }
}
