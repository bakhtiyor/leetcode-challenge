<?php

namespace App\Tests;

use App\FindWinnerOnTicTacToeGame;
use PHPUnit\Framework\TestCase;

class FindWinnerOnTicTacToeGameTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testTictactoe(array $moves, string $expected): void
    {
        $findWinnerOnTicTacToeGame = new FindWinnerOnTicTacToeGame();
        $result = $findWinnerOnTicTacToeGame->tictactoe($moves);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [[[0,0],[2,0],[1,1],[2,1],[2,2]], 'A'],
            [[[0,0],[1,1],[0,1],[0,2],[1,0],[2,0]], 'B'],
            [[[0,0],[1,1],[2,0],[1,0],[1,2],[2,1],[0,1],[0,2],[2,2]], 'Draw']
        ];
    }
}
