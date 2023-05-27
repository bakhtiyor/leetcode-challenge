<?php

namespace App\Tests;

use App\DivisorGame;
use PHPUnit\Framework\TestCase;

class DivisorGameTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testDivisorGame(int $n, bool $expected): void
    {
        $sut = new DivisorGame();
        $this->assertEquals($expected, $sut->divisorGame($n));
    }

    public function dataProvider(): array
    {
        return [
            [2, true],
            [3, false]
        ];
    }
}
