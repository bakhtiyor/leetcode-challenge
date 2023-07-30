<?php

namespace App\Tests;

use App\DetermineWinnerOfBowlingGame;
use PHPUnit\Framework\TestCase;

class DetermineWinnerOfBowlingGameTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testIsWinner(array $player1, array $player2, int $expected): void
    {
        $determineWinnerOfBowlingGame = new DetermineWinnerOfBowlingGame();
        $this->assertEquals($expected, $determineWinnerOfBowlingGame->isWinner($player1, $player2));
    }

    public function dataProvider(): array
    {
        return [
            [
                [4, 10, 7, 9],
                [6, 5, 2, 3],
                1
            ],
            [
                [3, 5, 7, 6],
                [8, 10, 10, 2],
                2
            ],
            [
                [2, 3],
                [4, 1],
                0
            ],
        ];
    }
}
