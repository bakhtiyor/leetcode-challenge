<?php

namespace App\Tests;

use App\DefangingIPAddress;
use PHPUnit\Framework\TestCase;

class DefangingIPAddressTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testDefangIPaddr(string $address, string $expected): void
    {
        $this->assertEquals($expected, (new DefangingIPAddress())->defangIPaddr($address));
    }

    public function dataProvider(): array
    {
        return [
           ['1.1.1.1', '1[.]1[.]1[.]1'],
           ['255.100.50.0', '255[.]100[.]50[.]0']
        ];
    }
}
