<?php

namespace App\Tests;

use App\FaultyKeyboard;
use PHPUnit\Framework\TestCase;

class FaultyKeyboardTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testFinalString(string $str, string $expected): void
    {
        $faultyKeyboard = new FaultyKeyboard();
        $this->assertEquals($expected, $faultyKeyboard->finalString($str));
    }

    public function dataProvider(): array
    {
        return [
            ['string', 'rtsng'],
            ['poiinter', 'ponter']
        ];
    }
}
