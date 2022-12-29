<?php

namespace App\Tests;

use App\AddStrings;
use PHPUnit\Framework\TestCase;

class AddStringsTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testAddStrings(string $num1, string $num2, string $expected): void
    {
        $addStrings = new AddStrings();
        $result = $addStrings->addStrings($num1, $num2);

        $this->assertSame($expected, $result);
    }

    /**
     * @return array
     */
    public function dataProvider(): array
    {
        return [
            ['456', '777', '1233'],
            ['11', '123', '134'],
            ['123', '678', '801'],
            ['456', '77', '533'],
            ['0', '0', '0']
        ];
    }
}
