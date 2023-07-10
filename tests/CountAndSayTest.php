<?php

namespace App\Tests;

use App\CountAndSay;
use PHPUnit\Framework\TestCase;

class CountAndSayTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testCountAndSay(int $num, string $expected): void
    {
        $this->assertEquals($expected, (new CountAndSay())->countAndSay($num));
    }

    public function dataProvider(): array
    {
        return [
            [1, '1'],
            [4, '1211']
        ];
    }
}
