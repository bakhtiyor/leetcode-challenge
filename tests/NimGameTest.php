<?php

namespace App\Tests;

use App\NimGame;
use PHPUnit\Framework\TestCase;

class NimGameTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testCanWinNim(int $number, bool $expected): void
    {
        $nimGame = new NimGame();
        $result = $nimGame->canWinNim($number);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [4, false],
            [1, true],
            [2, true]
        ];
    }
}
